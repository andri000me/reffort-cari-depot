<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'landingpagecontroller';
$route['help-center'] = 'helpcentercontroller';

// customers
$route['customers/register'] = 'customers/registercontroller/index';
$route['customers/login'] = 'customers/logincontroller/index';
$route['customers/auth/register'] = 'customers/authcontroller/register';
$route['customers/auth/login'] = 'customers/authcontroller/login';
$route['customers/auth/logout'] = 'customers/authcontroller/logout';
$route['customers/home'] = 'customers/homecontroller/index';
$route['customers/refill-depot'] = 'customers/refilldepotcontroller/index';
$route['customers/detail-refill-depot/(:num)'] = 'customers/detaildepotcontroller/index/$1';

// customers - API
$route['api/customers/refill-depot'] = 'customers/api/refilldepotcontroller/show';
$route['api/customers/refill-depot/nearby/(:any)/(:any)'] = 'customers/api/refilldepotcontroller/show_nearby/$1/$2';

// partners
$route['partners/login'] = 'partners/logincontroller/index';
$route['partners/register'] = 'partners/registercontroller/index';
$route['partners/auth/login'] = 'partners/authcontroller/login';
$route['partners/auth/logout'] = 'partners/authcontroller/logout';
$route['partners/auth/register'] = 'partners/authcontroller/register';
$route['partners/'] = 'partners/dashboardcontroller/index';
$route['partners/dashboard'] = 'partners/dashboardcontroller/index';
$route['partners/upload-license'] = 'partners/uploadlicensecontroller/index';
$route['partners/step-completed'] = 'partners/settingscontroller/step_completed';
$route['partners/settings'] = 'partners/settingscontroller/index';
$route['partners/profile'] = 'partners/profilecontroller/index';
$route['partners/profile/update'] = 'partners/profilecontroller/update';
$route['partners/gallery'] = 'partners/gallerycontroller/index';

// admins
$route['admins'] = 'admins/dashboardcontroller/index';
$route['admins/login'] = 'admins/logincontroller/index';
$route['admins/auth/login'] = 'admins/authcontroller/login';
$route['admins/auth/logout'] = 'admins/authcontroller/logout';
// $route['admins/dashboard'] = 'admins/dashboardcontroller/index';
$route['admins/partners'] = 'admins/partnerscontroller/index';
$route['admins/partners/add'] = 'admins/partnerscontroller/add';
$route['admins/partners/update'] = 'admins/partnerscontroller/update';
$route['admins/partners/save/add'] = 'admins/partnerscontroller/save_add';
$route['admins/partners/save/update'] = 'admins/partnerscontroller/save_update';
$route['admins/partners/delete'] = 'admins/partnerscontroller/delete';
$route['admins/partners/detail'] = 'admins/partnerscontroller/detail';

$route['migrate'] = 'migrationcontroller/migrate';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
