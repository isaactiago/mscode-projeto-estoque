<!doctype html>
<html lang="pt-BR">

<?php  
require_once('includes/head.php')
?>

<body>
  <main>
    <div class="border-bottom mb-2">
      <div class="container">
        <?php require_once('includes/header.php')?>
      </div>
    </div>

    <div class="container py-5">
      <div class="mb-4">
        <h1>Produtos</h1>
      </div>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">descrição</th>
            <th scope="col">categoria_id</th>
            <th scope="col-2 text-align-right">data_cadastro</th>
            <th scope="col-2 text-align-right">quantidade_inicial</th>
            <th scope="col-2 text-align-right">quantidade_disponiviel</th>
            <th scope="col-2 text-align-right">valor</th>
          </tr>
        </thead>
        <tbody>
          <?php 
        
            foreach($data as $valor){
              $dataFormata = date('d/m/Y', strtotime($valor['data_cadastro']));
             
              echo "
              
                 <tr>
                    <th scope='row'>{$valor['id']}</th>
                    <td>{$valor['nome']}</td>
                    <td>{$valor['descricao']}</td>
                    <td>{$valor['categoria_id']}</td>
                    <td>{$dataFormata}</td>
                    <td>{$valor['quantidade_inicial']}</td>
                    <td>{$valor['quantidade_disponivel']}</td>
                      <td>{$valor['valor']}</td>
                    <td class='col-2 text-align-right'>
                      <button class='btn btn-primary btn-sm'><i class='bi bi-plus'></i></button>
                      <a href='/editarProduto?id={$valor['id']}&nome={$valor['nome']}' class='btn btn-secondary btn-sm'><i class='bi bi-pencil'></i></a>
                      <a href='/removerProduto?id={$valor['id']}' class='btn btn-danger btn-sm'><i class='bi bi-x'></i></a>
                    </td>
                  </tr>

              ";
            }
          ?>
         
          
        </tbody>

      </table>
    </div>
    
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>




