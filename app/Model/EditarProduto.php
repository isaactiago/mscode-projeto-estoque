<?php 

namespace App\Model;


use App\Database\Database;
use App\Database\Query;

class EditarProduto
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

   
   public function editarProduto(int $id,string $nome, string $desc,int $qt_inicial, int $qt_disponivel, int $valor): bool
   {

      return $this->query->update(
        "produto",['nome' => $nome,'descricao' => $desc,'quantidade_inicial' => $qt_inicial, 'quantidade_disponivel' => $qt_disponivel,'valor' => $valor],
        "id = {$id}"
    );
   }

   public function buscar(int $id, string $nome): array
   {
       return $this->query->select('produto', "id = {$id} AND nome = '{$nome}'")[0];
   }

    
}


?>