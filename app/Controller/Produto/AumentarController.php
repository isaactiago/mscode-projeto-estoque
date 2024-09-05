<?php 
namespace App\Controller\Produto;
use App\Controller\AbstractController;
use App\Model\AumentarEstoque;


class AumentarController extends AbstractController
{
    public function index(array $requestData): void
    {
        
        
        $modal = new AumentarEstoque();
      
        if(isset($requestData['id'])){
            
            $modal->aumentarEstoque(id:$requestData['id']);
            $this->redirect("/produtos");
        }
    }
}
?>