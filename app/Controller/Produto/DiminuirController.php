<?php 
namespace App\Controller\Produto;
use App\Controller\AbstractController;
use App\Model\DiminuirEstoque;


class DiminuirController extends AbstractController
{
    public function index(array $requestData):void
    {
        $modal = new diminuirEstoque();
      
        if(isset($requestData['id'])){
            
            $modal->diminuirEstoque(id:$requestData['id']);
            $this->redirect("/produtos");
        }
    }
}
?>