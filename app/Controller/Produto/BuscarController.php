<?php 

namespace App\Controller\Produto;
use App\Controller\AbstractController;
use App\Model\EditarProduto;

class BuscarController extends AbstractController
{
    public function index(array $requestData): void
    {
           
        $id = $requestData['id'];
        $nome = $requestData['nome'];
        $model = new EditarProduto();

        $categoria = $model->buscar(id : $id, nome : $nome);
        
       
        $this->render('produto_editar.php', ['categoria' => $categoria]);
      
    }
}

?>