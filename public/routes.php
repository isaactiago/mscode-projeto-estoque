<?php


use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;
use App\Controller\AreaInicialController;
use App\Controller\LoginErradoController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/index' => AreaInicialController::class,
        '/loginErrado' => LoginErradoController::class,
    ],
    'default' => NotFoundController::class
];
