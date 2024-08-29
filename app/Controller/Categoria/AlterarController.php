<?php 


namespace App\Controller\Categoria;
use App\Controller\AbstractController;
use App\Model\EditarCategoria;

class AlterarController extends AbstractController
{
    public function index(array $requestData): void
    {
           
      


        $id = $requestData['id'];

        $model = new EditarCategoria();
        $categoria = $model->editarCategoria($id);

        $this->render('categorias/cadastrar_editar.php', ['categoria' => $categoria]);
      
    }
}

?>