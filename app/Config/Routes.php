<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('/login', 'Login::Logar');
$routes->get('Cadastro', 'Cadastro::index');
$routes->post('Cadastro/Cadastrar', 'Cadastro::Cadastrar');
$routes->get('Home', 'Home::index');
