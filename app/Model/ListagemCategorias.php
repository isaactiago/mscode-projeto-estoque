<?php 

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class ListagemCategorias
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();

      
    }

   public function listarCategorias(): false|array
   {
        $listagem = $this->query->select("categoria");
        return $listagem;
   }
}
?>