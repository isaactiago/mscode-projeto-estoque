<?php

namespace App\Controller;

use App\Model\Usuario;

class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $usuarioConexao = new Usuario();
       
      
        $usuario = $usuarioConexao->buscarPorEmail($requestData['email']); 


        if (null === $usuario) {
            $this->redirect('/error');
         
            exit;
        } 
        //valida a senha
        // lógica para fazer login

        if(!empty($_POST['email']) && !empty($_POST['password'])){

            //esse if verifica se o usuario e true, pq se nao qualquer usuario poder loga.
            if($usuario){
                $this->redirect('/index.php');

                exit;
            }
              
        }
           
       
        // redirecionar para painel
        $this->redirect('/app');
    }
}
