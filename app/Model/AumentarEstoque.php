<?php 
namespace App\Model;


use App\Database\Database;
use App\Database\Query;

class AumentarEstoque
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

   


   public function aumentarEstoque(int $id): bool
   {
       $resultado = $this->query->select('produto',"id = {$id}" ,"quantidade_disponivel");
       
        if($resultado && isset($resultado[0]['quantidade_disponivel'])){
            $novaQuantidade = $resultado[0]['quantidade_disponivel'] + 1;

             // Atualizar a quantidade no banco de dados
             return $this->query->update('produto', ['quantidade_disponivel' => $novaQuantidade], "id = {$id}");
        }

        return false;
    }

    
}

?>