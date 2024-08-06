<?php

use App\Controllers\GraficoController;
use App\Controllers\HomeController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [HomeController::class, 'index'], ['as' => 'home']);
$routes->get('grafico/exibir', [GraficoController::class, 'index'], ['as' => 'grafico.exibir']);
