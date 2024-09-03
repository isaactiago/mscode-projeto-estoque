<?php 
namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class InserirProduto
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();

      
    }

   
   public function inserirProduto(array $dado): bool
   {
     
       if(!empty($dado)){
            $this->query->insert("produto",$dado);
            return true;
        }
      
      return false;
       
   }

    
}
?>