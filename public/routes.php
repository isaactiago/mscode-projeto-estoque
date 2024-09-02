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
use App\Controller\Categoria\SalvarController;
use App\Controller\Produto\ProdutosController;
use  App\Controller\Produto\RemoverProdutoController;
use  App\Controller\Produto\BuscarController;
use  App\Controller\Produto\EditarProdutoController;


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
        '/salvar' => SalvarController::class,
        '/produtos' => ProdutosController::class,
        '/removerProduto' => RemoverProdutoController::class,
        '/editarProduto' => BuscarController::class,
        '/produtoEditado' => EditarProdutoController::class,

    ],
    'default' => NotFoundController::class,
    

];
