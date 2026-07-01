<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Public Pages
$routes->get('courses', 'Website::courses');
$routes->get('course/(:segment)', 'Website::courseDetail/$1');
$routes->get('about', 'Website::about');
$routes->get('contact', 'Website::contact');
$routes->get('login', 'Website::login');
$routes->get('register', 'Website::register');

// Portal Pages (Student)
$routes->get('student/dashboard', 'Student\Dashboard::index');
$routes->get('student/my-courses', 'Student\Dashboard::myCourses');
$routes->get('student/assignments', 'Student\Dashboard::assignments');
$routes->get('student/profile', 'Student\Dashboard::profile');

// Portal Pages (Teacher)
$routes->get('teacher/dashboard', 'Teacher\Dashboard::index');
$routes->get('teacher/my-batches', 'Teacher\Dashboard::batches');
$routes->get('teacher/reviews', 'Teacher\Dashboard::reviews');

// Portal Pages (Parent)
$routes->get('parent/dashboard', 'Parent\Dashboard::index');

// Admin Pages
$routes->get('admin/dashboard', 'Admin\Dashboard::index');
$routes->get('admin/courses', 'Admin\Content::courses');
$routes->get('admin/blogs', 'Admin\Content::blogs');
$routes->get('admin/users', 'Admin\Content::users');
$routes->get('admin/settings', 'Admin\Content::settings');
