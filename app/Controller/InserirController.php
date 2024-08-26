<?php 

namespace App\Controller;
use App\Model\Usuario;


class InserirController extends AbstractController
{

    public function index(array $requestData):void
    {
        $usuarioConexao = new Usuario();

        //criptografa a senha do input que o usuario digitou;
        $senha = $requestData['password'];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $listaInfo = [
           'nome'=> $requestData['nome'],
           'email' => $requestData['email'],
           'senha' => $senha_hash
        ];
        
        //valida se o cadastro é true;
        if($usuarioConexao->cadastarUsuario(dados: $listaInfo)){
            $this->redirect('/login');
            exit; 
        }else{
            //se nao, quer dizer que ja existe um usuario, ou algun input veio vazio;
            $this->redirect('/cadastroErrado');
            exit; 
        }
      
      

    }
}

?>