<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile');
