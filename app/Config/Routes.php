<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('/home/inicio', 'Home::inicio');
$routes->get('/usuarios/usuario_agregar', 'Usuarios::usuario_agregar');
$routes->get('/usuarios', 'Usuarios::index');



