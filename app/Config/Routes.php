<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página Inicial
$routes->get('/', 'Home::index');

// Notícias
$routes->get('/noticias', 'Noticias::index');
$routes->get('/noticias/(:num)', 'Noticias::ler/$1');