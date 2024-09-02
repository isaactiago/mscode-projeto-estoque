<?php 

namespace App\Controller\Produto;
use App\Controller\AbstractController;
use App\Model\ListarProdutos;

class ProdutosController extends AbstractController
{
    public function index(array $requestData): void
    {

        $model = new ListarProdutos();
        $resultado = $model->listarProdutos();
        $this->render('produtos.php',$resultado);  
    }
}

?>