<?php 

namespace App\Model;


use App\Database\Database;
use App\Database\Query;

class EditarCategoria
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();

      
    }

   
   public function editarCategoria(string $id,string $nome): bool
   {
     
        $categoria = $this->query->update("categoria",['nome' => $nome],"id = {$id}");
      
        return $categoria; 
    }

    
}


?>