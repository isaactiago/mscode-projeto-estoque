<?php


use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;
use App\Controller\AreaInicialController;
use App\Controller\Error\LoginErradoController;
use App\Controller\CadastrarController;
use App\Controller\InserirController;
use App\Controller\Error\CadastroErradoController;
use App\Controller\Categoria\ListarController;
use App\Controller\Categoria\NovaCategoriaController;
use App\Controller\Categoria\CadastrarCategoriaController;
use App\Controller\Categoria\RemoverController;
use App\Controller\Categoria\AlterarController;


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
        '/categorias' => ListarController::class,
        '/nova_categoria' => NovaCategoriaController::class,
        '/cadastrarCategoria' => CadastrarCategoriaController::class,
        '/remover' => RemoverController::class,
        '/editar' => AlterarController::class,
    ],
    'default' => NotFoundController::class,
    

];
