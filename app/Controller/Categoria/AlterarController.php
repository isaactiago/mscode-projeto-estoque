<?php 


namespace App\Controller\Categoria;
use App\Controller\AbstractController;
use App\Model\EditarCategoria;

class AlterarController extends AbstractController
{
    public function index(array $requestData): void
    {
           
      


        $id = $requestData['id'];
        $nome = $requestData['nome'];
        $model = new EditarCategoria();
        $categoria = $model->buscar(id : $id, nome : $nome);
       
        $this->render('cadastrar_editar.php', ['categoria' => $categoria]);
      
    }
}

?>