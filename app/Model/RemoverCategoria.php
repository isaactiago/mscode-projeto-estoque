<?php 

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class RemoverCategoria
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();

      
    }
   
   public function removerCategoria(string $id): bool
   {
        $categoria = $this->query->delete("categoria"," id = {$id}");
        return $categoria; 
   }
}




?>