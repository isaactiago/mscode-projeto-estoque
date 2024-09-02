<?php 
namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class ListarProdutos
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();

      
    }

   
   public function listarProdutos(): false|array
   {
        $listagem = $this->query->select("produto");
      
        return $listagem;
   }

    
}

?>