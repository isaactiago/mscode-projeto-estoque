<?php 

namespace App\Controller\Error;
use App\Controller\AbstractController;


class CadastroErradoController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('cadastroErrado.php');
    }
}


?>