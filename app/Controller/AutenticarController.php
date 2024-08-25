<?php

namespace App\Controller;

use App\Model\Usuario;


class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
 
        if(empty($_POST['email']) || empty($_POST['password'])){
             $this->redirect('/login');
            exit; 
        } 
           
        $usuarioConexao = new Usuario();
    
         if($usuarioConexao->validaLogin(email: $requestData['email'],senha : $requestData['password'])){
            $this->redirect('/index');

            exit;
        }else{
          
            $this->redirect('/loginErrado');
            exit; 
        }
       
       
        
    }
}
