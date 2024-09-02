<?php 

namespace App\Controller;

class AreaInicialController extends AbstractController
{
    public function index(array $data): void
    {
      
        session_start();
       
        if(isset($_SESSION['usuarioLogado'])){
            $this->render('index.php');
        }else{
            $this->redirect('/error');
        }
       
      
        
    }
}


?>