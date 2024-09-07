<?php 

//aqui vai renderizar a categoria.php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\ListagemCategorias;

class ListarController extends AbstractController
{
    public function index(array $data): void
    {
        $listagem = new ListagemCategorias();
        $resultado = $listagem->listarCategorias();
       
        $this->render('categorias.php',$resultado);
    }
}

?>