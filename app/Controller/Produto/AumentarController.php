<?php 
namespace App\Controller\Produto;
use App\Controller\AbstractController;


class AumentarController extends AbstractController
{
    public function index(array $requestData): void
    {
           
        
        if(isset($requestData['qt_disponivel'])){
            $res = $requestData['quantidade_disponivel'] + 1;
            $this->redirect("/produtos");
        }
    }
}
?>