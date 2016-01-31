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
$route['contact_us'] = "welcome/contact_us";
$route['about'] = "welcome/about";
$route['agents'] = "welcome/agents";
$route['contact'] = "welcome/contact";
$route['all_property'] = "welcome/all_property";
$route['all_property/(:any)'] = "welcome/all_property/$1";
$route['login'] = "welcome/login";
$route['logout'] = "welcome/logout";
$route['add_property'] = "welcome/add_property";
$route['search_property'] = "welcome/search_property";
$route['account_details'] = "welcome/account_details";
$route['favourite'] = "welcome/favourite";
$route['single_agents/(:any)'] = "welcome/single_agents/$1";
$route['property_detail/(:any)'] = "welcome/property_detail/$1";
$route['property_edit/(:any)'] = "welcome/property_edit/$1";
$route['welcome/add_favourite_property'] = "welcome/add_favourite_property";
$route['welcome/add_unfavourite_property'] = "welcome/add_unfavourite_property";
$route['welcome/save_contact_info'] = "welcome/save_contact_info";
$route['welcome/save_edit_property'] = "welcome/save_edit_property";
$route['welcome/edit_user_info'] = "welcome/edit_user_info";
$route['welcome/save_add_property'] = "welcome/save_add_property";
$route['welcome/save_newsleeter_info'] = "welcome/save_newsleeter_info";
$route['welcome/chk_login'] = "welcome/chk_login";
$route['dashboard'] = "welcome/dashboard";
$route['register'] = "welcome/register";
$route['welcome/save_user_info'] = "welcome/save_user_info";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */