<?php 
namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\EditarCategoria;
use App\Model\InserirCategoria;


class SalvarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new EditarCategoria();
        $model2 = new InserirCategoria();
        
        if (isset($requestData['nome'])) {
            $model->editarCategoria($requestData['id'],$requestData['nome']);
        } else {
            $model2->cadastrarCategorias($requestData['nome']);
        }

        $this->redirect('/categorias');
    }
}
?>