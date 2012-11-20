<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['login'] = '/welcome/login';

$route['about'] = '/welcome/home';
$route['newsletters'] = '/welcome/home';
$route['contact'] = '/welcome/home';
$route['events'] = '/welcome/home';
$route['menus'] =  '/welcome/home';
$route['gallery'] = '/welcome/home';
$route['news'] = '/welcome/home';
$route['events'] = '/welcome/home';
$route['find-a-lawyer'] = '/laworldmembers/home';
$route['view_company/(:num)'] = '/laworldmembers/view_company/$1';
$route['links.html'] = '/welcome/webroute';
$route['about-laworld.html'] = '/welcome/webroute';
$route['about-laworld/(:any)'] = "welcome/webroute";
$route['membership/(:any)'] = "welcome/webroute";

$route['news-and-publications/(:any)'] = "welcome/webroute";
$route['links.html'] = '/welcome/home';
$route['application-for-membership-documents'] = '/welcome/home';
$route['doing-business-with-china.html'] = '/welcome/home';

$route['thankyou'] = '/welcome/home';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */