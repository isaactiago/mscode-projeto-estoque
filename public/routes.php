<?php


use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;
use App\Controller\AreaInicialController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/index.php' => AreaInicialController::class,
        
        
    ],
    'default' => NotFoundController::class
];
