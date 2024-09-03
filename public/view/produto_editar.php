<!doctype html>
<html lang="pt-BR">

<?php require_once('includes/head.php');?>

<body>
  <main>
    <div class="border-bottom mb-2">
      <div class="container">
       <?php require_once('includes/header.php');?>
      </div>
    </div>

    <div class="container py-5">
      <div class="mb-4">
        <?php
       
          if (isset($data['categoria'])) {
            echo "<h1>Editar Produto</h1>";
          } else {
            echo "<h1>Nova categoria</h1>";
          }
        ?>
      </div>

      <div class="w-50 mt-2">
     
      <?php
            if (isset($data['categoria'])) {
                // Gera a URL com o ID e Nome
                echo "<form method='POST' action='/produtoEditado?id={$data['categoria']['id']}&nome={$data['categoria']['nome']}&descricao={$data['categoria']['descricao']}
                &quantidade_inicial={$data['categoria']['quantidade_inicial']}&quantidade_disponivel={$data['categoria']['quantidade_disponivel']}
                &valor={$data['categoria']['valor']}'>";
                } else {
                // Gera a URL padrão sem o ID
                echo '<form method="POST" action="/salvar">';
            }
        ?>
        
        <div class="mb-3">
        <?php if (isset($data['categoria'])) { ?>
            <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome"  value="<?php echo $data['categoria']['nome']; ?>">
        </div>
        <?php } ?>

        <?php 

            if(isset($data['categoria'])){
                echo "
                     <div class='mb-3'>
                    <label for='nome' class='form-label'>descrição</label>
                     <input type='text' class='form-control' id='descricao' name='descricao' value='{$data['categoria']['descricao']}'
                ";
            }
        ?> 
        <?php 

            if(isset($data['categoria'])){
                echo "
                    <div class='mb-3'>
                    <label for='nome' class='form-label'>quantidade_inicial</label>
                    <input type='text' class='form-control' id='qt_inicial' name='qt_inicial' value='{$data['categoria']['quantidade_inicial']}' readonly
                ";
            }
        ?>
        <?php 

                if(isset($data['categoria'])){
                    echo "
                        <div class='mb-3'>
                        <label for='nome' class='form-label'>quantidade_disponivel</label>
                        <input type='text' class='form-control' id='qt_disponivel' name='qt_disponivel' value='{$data['categoria']['quantidade_disponivel']}'readonly
                    ";
                }
        ?>
        <?php 

            if(isset($data['categoria'])){
                echo "
                    <div class='mb-3'>
                    <label for='nome' class='form-label'>Valor</label>
                    <input type='text' class='form-control' id='valor' name='valor' value='{$data['categoria']['valor']}'
                ";
            }
        ?>

           
       
          </div><br>
          <button type="submit" class="btn btn-primary">Salvar</button>
        
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>