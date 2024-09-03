<?php 
namespace App\Controller\Produto;
use App\Controller\AbstractController;
use App\Model\InserirProduto;

class InserirProdutoController extends AbstractController
{
    public function index(array $requestData): void
    {
        
        $model = new InserirProduto();
      
        $listaCategoria = [
            'nome' => $requestData['nome'],
            'descricao' => $requestData['descricao'],
            'categoria_id' => $requestData['categoriaId'],
            'quantidade_inicial' => $requestData['quantidade'],
            'quantidade_disponivel' => $requestData['quantidade'],
            'valor' => $requestData['valor'],
        ];

        if(!empty($listaCategoria)){
            $model->inserirProduto(dado: $listaCategoria);
        }
       
    }
}

?>