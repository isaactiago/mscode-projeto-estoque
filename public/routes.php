<?php


use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;
use App\Controller\AreaInicialController;
use App\Controller\LoginErradoController;
use App\Controller\CadastrarController;
use App\Controller\InserirController;
use App\Controller\CadastroErradoController;
error_reporting(E_ALL);
ini_set('display_errors', '1');
$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/index' => AreaInicialController::class,
        '/loginErrado' => LoginErradoController::class,
        '/cadastrar' => CadastrarController::class,
        '/cadastrar/inserir' => InserirController::class,
        '/cadastroErrado' => CadastroErradoController::class,
    ],
    'default' => NotFoundController::class,
    

];
