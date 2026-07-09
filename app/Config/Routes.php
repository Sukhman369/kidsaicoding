<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('setup', 'Setup::index');


// Auth Routes (Students/General)
$routes->get('login', 'Website::login');
$routes->get('logout', 'Auth::logout');


// Booking Flow
$routes->get('book-free-class', 'Booking::index');
$routes->post('book-free-class/step1', 'Booking::processStep1');
$routes->get('book-free-class/confirm-booking', 'Booking::step2');
$routes->post('book-free-class/submit', 'Booking::submit');

$routes->get('book-free-class/success', 'Booking::success');


$routes->get('courses', 'Website::courses');
$routes->get('course/(:segment)', 'Website::courseDetail/$1');

$routes->get('about', 'Website::about');
$routes->get('contact', 'Website::contact');
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

// Admin Panel (Protected)
$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    // Admin Auth
    $routes->get('login', '\App\Controllers\Auth::login', ['namespace' => '']);
    $routes->post('login', '\App\Controllers\Auth::postLogin', ['namespace' => '']);

    $routes->get('dashboard', 'Dashboard::index');

    
    // Courses Management
    $routes->get('courses', 'Courses::index');
    $routes->get('courses/create', 'Courses::create');
    $routes->post('courses/store', 'Courses::store');
    $routes->get('courses/edit/(:num)', 'Courses::edit/$1');
    $routes->post('courses/update/(:num)', 'Courses::update/$1');
    $routes->get('courses/delete/(:num)', 'Courses::delete/$1');

    // User Management
    $routes->get('users', 'Users::index');
    $routes->post('users/store', 'Users::store');
    $routes->get('users/delete/(:num)', 'Users::delete/$1');

    // Booking Management   
    $routes->get('bookings', 'Bookings::index');
    $routes->post('bookings/update/(:num)', 'Bookings::updateStatus/$1');

    // Settings
    $routes->get('settings', 'Settings::index');
    $routes->post('settings/update', 'Settings::update');
});
