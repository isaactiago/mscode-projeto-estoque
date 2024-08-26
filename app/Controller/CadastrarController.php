<?php 

namespace App\Controller;


class CadastrarController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('cadastrar.php');
        
    }
}


?>