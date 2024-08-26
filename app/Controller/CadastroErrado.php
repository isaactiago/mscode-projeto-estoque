<?php 

namespace App\Controller;



class CadastroErradoController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('cadastroErrado.php');
    }
}


?>