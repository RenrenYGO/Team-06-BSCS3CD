<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';


// $route['default_controller'] = 'Pages/view';
//$route['(:any)'] = 'Pages/view/$1';

$route['posts/(:any)']="posts/view/$1";
$route['posts'] = 'posts/index';
// $route['posts/view/(:any)'] = "posts/view/$1";


$route['threads'] = 'threads/index';
$route['threads/posts/(:any)'] = 'threads/posts/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
