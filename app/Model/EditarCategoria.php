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

   
   public function editarCategoria(int $id,string $nome): bool
   {

      return $this->query->update("categoria",['nome' => $nome],"id = {$id}");
   }

   public function buscar(int $id, string $nome): array
   {
       return $this->query->select('categoria', "id = {$id} AND nome = '{$nome}'")[0];
   }

    
}


?>