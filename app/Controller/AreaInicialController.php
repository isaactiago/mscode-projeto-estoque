<?php 

namespace App\Controller;

class AreaInicialController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('index.php');
      
        
    }
}


?>