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
      <div class="mb-4 d-flex flex-row justify-content-between">
        <h1>Categorias</h1>
        <div>
          <a href="/nova_categoria" class="btn btn-primary"><i class="bi bi-plus"></i>Nova categoria</a>
        </div>
      </div>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col-1 text-align-right">Actions</th>
          </tr>
        </thead>
        <tbody>
           <?php 
              foreach($data as  $valor){
                echo  "
                       <tr>
                           <th scope='row'>{$valor['id']}</th>
                              <td>{$valor['nome']}</td>
                              <td class='col-1 text-align-right'>
                                <a href='/alterar?id={$valor['id']}' class='btn btn-secondary btn-sm'><i class='bi bi-pencil'></i></a>
                                <a href='/remover?id={$valor['id']}' class='btn btn-danger btn-sm'><i class='bi bi-x'></i></a>
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




