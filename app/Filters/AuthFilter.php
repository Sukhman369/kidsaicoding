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
        $uri = $request->getUri()->getPath();

        // 1. Admin Area Protection
        if (str_starts_with($uri, 'admin/')) {
            // Exclude login routes
            if ($uri !== 'admin/login') {
                if (!$session->get('isLoggedIn') || $session->get('userRole') !== 'admin') {
                    return redirect()->to('/admin/login')->with('error', 'Please log in to access the administrator panel.');
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
        $uri = $request->getUri()->getPath();

        if (str_starts_with($uri, 'admin/') || str_starts_with($uri, 'student/')) {
            $response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
            $response->setHeader('Pragma', 'no-cache');
            $response->setHeader('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT');
        }

        return $response;
    }
}
