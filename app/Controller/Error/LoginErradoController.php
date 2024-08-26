<?php 

namespace App\Controller\Error;
use App\Controller\AbstractController;

class  LoginErradoController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('loginErrado.php');
      
        
    }
}

?>