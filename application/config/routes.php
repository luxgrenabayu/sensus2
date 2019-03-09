<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//login
$route['login'] = 'auth';
$route['signin'] = 'web/login';

$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
