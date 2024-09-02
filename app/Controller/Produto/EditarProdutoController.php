<?php 
namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\EditarProduto;



class EditarProdutoController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new EditarProduto();
      

      
        
       
         if (isset($requestData['nome'])) {
            $model->editarProduto(
                id :$requestData['id'],
               nome: $requestData['nome'],
               desc: $requestData['descricao'],
                qt_inicial: $requestData['qt_inicial'],
               qt_disponivel: $requestData['qt_disponivel'],
               valor: $requestData['valor'], 
            );
        }  

        $this->redirect('/produtos');
    }
}
?>