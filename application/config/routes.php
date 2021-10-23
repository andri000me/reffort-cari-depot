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
$route['customers/auth/register'] = 'customers/authcontroller/register';
$route['customers/login'] = 'customers/logincontroller/index';
$route['customers/auth/login'] = 'customers/authcontroller/login';
$route['customers/auth/logout'] = 'customers/authcontroller/logout';
$route['customers/home'] = 'customers/homecontroller/index';
$route['customers/detail-refill-depot'] = 'customers/detaildepotcontroller/index';

$route['customers/search'] = 'customers/searchcontroller/index';

// customers - API
$route['api/customers/refill-depot/nearby/(:any)/(:any)'] = 'customers/api/refilldepotcontroller/show_nearby/$1/$2';

// partners
$route['partners/dashboard'] = 'partners/dashboardcontroller/index';
$route['partners/license_document'] = 'partners/LicenseDocumentController/index';
$route['partners/login'] = 'partners/logincontroller/index';
$route['partners/auth/login'] = 'partners/authcontroller/login';
$route['partners/auth/logout'] = 'partners/authcontroller/logout';
$route['partners/register'] = 'partners/registercontroller/index';
$route['partners/auth/register'] = 'partners/authcontroller/register';
$route['partners/profile'] = 'partners/profilecontroller/index';
$route['partners/license'] = 'partners/licensedocumentcontroller/index';
$route['partners/edit'] = 'partners/editgallerycontroller/index';

// admins

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
