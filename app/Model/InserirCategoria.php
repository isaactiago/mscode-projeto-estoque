<?php 

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class InserirCategoria
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();

      
    }

   public function cadastrarCategorias(array $dado): bool
   {
       if(!empty($dado)){
            $this->query->insert("categoria",$dado);
            return true;
        }

      return false;
   }
}



?>