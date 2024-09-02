<?php
namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\RemoverProduto;

class RemoverProdutoController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new RemoverProduto();
      
        $resultado = $model->removerProduto(id : $requestData['id']);
       
        if($resultado){
            $this->redirect('/produtos');
        }

      
    }
}

?>