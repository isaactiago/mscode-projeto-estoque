<?php 

namespace App\Controller;

class AreaInicialController extends AbstractController
{
    public function index(array $data): void
    {
        session_start();
        dd($_SESSION);
        $this->render('index.php');
      
        
    }
}


?>