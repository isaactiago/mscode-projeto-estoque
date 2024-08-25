<?php 

namespace App\Controller;


class  LoginErradoController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('loginErrado.php');
      
        
    }
}

?>