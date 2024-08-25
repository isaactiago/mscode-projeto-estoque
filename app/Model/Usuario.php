<?php

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class Usuario
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();

      
    }

 

    public function validaLogin(string $email, string $senha): bool
    {

     
     
        $usuario = $this->query->select('usuario', 'email = ' . ' "'.$email.'" '); 
        
   
       

        //essa função verifica se a senha que do input é mesma que a senha do banco
        if(password_verify($senha, "{$usuario[0]['senha']}")) {
          return true;
        }
        
      
        
    
       
        return false;
    }

    
}
