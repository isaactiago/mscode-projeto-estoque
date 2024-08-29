<?php 

namespace App\Controller\Categoria;
use App\Controller\AbstractController;
use App\Model\RemoverCategoria;

class RemoverController extends AbstractController
{
    public function index(array $requestData): void
    {
           
        $removerConexao = new RemoverCategoria();
      
        $remover = $removerConexao->removerCategoria(id : $requestData['id']);
     
        if($remover){
         
           $this->redirect('/categorias');
            exit;  
            
        }
      
    }
}

?>