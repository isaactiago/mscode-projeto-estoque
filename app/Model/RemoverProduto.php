<?php 

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class RemoverProduto
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();

      
    }

   
   public function removerProduto(string $id): bool
   {
     
        $model = $this->query->delete("produto"," id = {$id}");
        
        return $model; 
    }

    
}
?>