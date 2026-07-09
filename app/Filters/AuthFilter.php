<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during normal execution.
     * However, when an abnormal state is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script execution will be halted and That
     * Response will be sent back to the client.
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $uri = ltrim($request->getUri()->getPath(), '/');

        // 1. Admin Area Protection
        if (str_starts_with($uri, 'admin/')) {
            // Exclude login routes
            if ($uri !== 'admin/login') {
                $allowedRoles = ['admin', 'super_admin', 'blogger', 'course_manager', 'trainer'];
                $role = $session->get('userRole');
                if (!$session->get('isLoggedIn') || !in_array($role, $allowedRoles)) {
                    return redirect()->to('/admin/login')->with('error', 'Please log in to access the administrator panel.');
                }

                // Sub-route permissions based on role
                if ($role === 'blogger') {
                    // Blogger can only access dashboard, blogs, logout
                    if (!str_starts_with($uri, 'admin/dashboard') && !str_starts_with($uri, 'admin/blogs') && !str_starts_with($uri, 'admin/logout')) {
                        return redirect()->to('/admin/dashboard')->with('error', 'Access Denied: Blogger permissions only.');
                    }
                }

                if ($role === 'course_manager') {
                    // Course Manager can only access dashboard, courses, logout
                    if (!str_starts_with($uri, 'admin/dashboard') && !str_starts_with($uri, 'admin/courses') && !str_starts_with($uri, 'admin/logout')) {
                        return redirect()->to('/admin/dashboard')->with('error', 'Access Denied: Course Manager permissions only.');
                    }
                }

                if ($role === 'trainer') {
                    // Trainer can only access dashboard, bookings, students, logout
                    $allowedTrainerUris = ['admin/dashboard', 'admin/bookings', 'admin/students', 'admin/logout'];
                    $isAllowed = false;
                    foreach ($allowedTrainerUris as $u) {
                        if (str_starts_with($uri, $u)) {
                            $isAllowed = true;
                            break;
                        }
                    }
                    if (!$isAllowed) {
                        return redirect()->to('/admin/dashboard')->with('error', 'Access Denied: Trainer permissions only.');
                    }
                }
            }
        }

        // 2. Student Area Protection
        if (str_starts_with($uri, 'student/')) {
            if (!$session->get('isLoggedIn') || $session->get('userRole') !== 'student') {
                return redirect()->to('/login')->with('error', 'Please log in to access your student dashboard.');
            }
        }

        return null;
    }

    /**
     * Allows filtering the response before it is sent back to the client.
     * Here we disable local browser caching on authenticated dashboards
     * to prevent back-button visual session restore after logout.
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $uri = ltrim($request->getUri()->getPath(), '/');

        if (str_starts_with($uri, 'admin/') || str_starts_with($uri, 'student/')) {
            $response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
            $response->setHeader('Pragma', 'no-cache');
            $response->setHeader('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT');
        }

        return $response;
    }
}
