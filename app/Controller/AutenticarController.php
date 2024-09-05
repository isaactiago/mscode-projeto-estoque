<?php

namespace App\Controller;
use App\Model\Usuario;


class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        
        session_start();
        if(empty($_POST['email']) || empty($_POST['password'])){
            $this->redirect('/login');
            exit; 
        } 
           
        $usuarioConexao = new Usuario();
        $usuario = $usuarioConexao->buscarPorEmail(email: $requestData['email']);
   
        if(!empty($usuario)){

            $senha = $requestData['password'];

            if(password_verify($senha,"{$usuario[0]['senha']}")){
                $_SESSION['usuarioLogado'] = true;
                $_SESSION['id'] = $usuario[0][ 'id' ];
                $_SESSION['nome'] = $usuario[0]['nome'];
                $this->redirect('/index');
                exit;
            }
          
            $this->redirect('/loginErrado');
            exit; 
           
        }else{
            //se o meu valida login nao for true; ele manda para essa pagina
            $this->redirect('/loginErrado');
            exit; 
        }
    
       
    }
}
