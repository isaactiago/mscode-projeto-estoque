<?php 
           
    use App\Model\ListagemCategorias;
  
    
   

    $listagem = new ListagemCategorias();
    $resultado = $listagem->listarCategorias();
       
    
    foreach($resultado as $chave => $valor){
         echo  "
                <tr>
                    <th scope='row'>{$resultado[$chave]['id']}</th>
                       <td>{$resultado[$chave]['nome']}</td>
                       <td class='col-1 text-align-right'>
                         <a href='/index' class='btn btn-secondary btn-sm'><i class='bi bi-pencil'></i></a>
                         <a href='/remover?id={$resultado[$chave]['id']}' class='btn btn-danger btn-sm'><i class='bi bi-x'></i></a>
                    </td>
                </tr>
        ";  
    } 
?>

