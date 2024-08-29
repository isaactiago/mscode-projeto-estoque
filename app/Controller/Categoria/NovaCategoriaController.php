<?php 

namespace App\Controller\Categoria;
use App\Controller\AbstractController;

class NovaCategoriaController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('nova_categoria.php');
        
    }
}

?>