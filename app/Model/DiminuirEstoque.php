<?php 
namespace App\Model;


use App\Database\Database;
use App\Database\Query;

class DiminuirEstoque
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

   


   public function diminuirEstoque(int $id): bool
   {
        $modal = $this->query->select('produto'," id = {$id}","quantidade_disponivel");

        if($modal && isset($modal[0]['quantidade_disponivel'])){

            $novaQuantidade = $modal[0]['quantidade_disponivel'] - 1;

            return $this->query->update("produto",['quantidade_disponivel' => $novaQuantidade],"id = {$id}");
        }

        return false;
   }
 

    
}
?>