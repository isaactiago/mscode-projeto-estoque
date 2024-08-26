<?php 

namespace App\Controller;
use App\Model\Usuario;

error_reporting(E_ALL);
ini_set('display_errors', '1');
class InserirController extends AbstractController
{

    public function index(array $requestData):void
    {
        $usuarioConexao = new Usuario();

        $senha = $requestData['password'];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $listaInfo = [
           'nome'=> $requestData['nome'],
           'email' => $requestData['email'],
           'senha' => $senha_hash
        ];
        
        if($usuarioConexao->cadastarUsuario(dados: $listaInfo)){
            $this->redirect('/login');
            exit; 
        }else{
        
            $this->redirect('/cadastroErrado');
            exit; 
        }
      
      

    }
}

?>