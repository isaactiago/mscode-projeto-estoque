<?php 

namespace App\Controller\Categoria;
use App\Controller\AbstractController;
use App\Model\InserirCategoria;

class CadastrarCategoriaController extends AbstractController
{
    public function index(array $requestData): void
    {
        
       
           
        $cadastrarConexao = new InserirCategoria();
      
        $listaCategoria = [
            'nome' => $requestData['nome']
        ];
        $cadastro = $cadastrarConexao->cadastrarCategorias(dado: $listaCategoria);
       
        if(empty($requestData['nome'])){
         
           $this->redirect('/nova_categoria');
            exit;  
            
        }
        if(!empty($cadastro)){

            $this->redirect('/nova_categoria');
            exit; 
           
        }else{
            $this->redirect('/nova_categoria');
            exit; 
        }
       
    }
}

?>