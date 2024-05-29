<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('guru', 'Ccv::index'); 
$routes->get('cv', 'Cv::index'); 

