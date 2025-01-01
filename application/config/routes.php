<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// In application/config/routes.php
// $route['default_controller'] = 'Welcome';
// $route['login'] = 'login';
// $route['admin_dashboard'] = 'admin_dashboard';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
// $route['dashboard/manage_employees'] = 'dashboard/manage_employees';



// $route['admin/login'] = 'admin/login';
// $route['admin/logout'] = 'admin/logout';
// $route['default_controller'] = 'admin/login';



// $route['adminDashboard'] = 'AdminDashboard/index';
// $route['default_controller'] = 'admin/login';
// $route['admin/login'] = 'admin/login';
// $route['admin/login_process'] = 'admin/login_process';
// $route['admin/dashboard'] = 'admin/dashboard';  // Admin Dashboard
// //$route['admin/logout'] = 'admin/logout';

$route['default_controller'] = 'login';  // Default controller should load the login page
$route['login'] = 'login';  // login page route
$route['login/validate'] = 'login/validate';  // form submission for login
$route['admin/dashboard'] = 'AdminDashboard/index';  // This route points to the AdminDashboard controller
$route['login/logout'] = 'login/logout';  // logout route