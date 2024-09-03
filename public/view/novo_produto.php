<!doctype html>
<html lang="pt-BR">

<?php  require_once('includes/head.php');?>
<body>
  <main>
    <div class="border-bottom mb-2">
      <div class="container">
        <?php require_once('includes/header.php'); ?>
      </div>
    </div>

    <div class="container py-5">
      <div class="mb-4">
        <h1>Novo produto</h1>
      </div>

      <div class="w-50 mt-2">
        <form action="/inserirProduto">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required minlength="2">
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" style="resize:none;" rows="5"></textarea>
          </div>


          <div class="row">
            <div class="mb-3 col-4">
              <label for="categoriaId" class="form-label">Categoria Id:</label>
              <input type="number" class="form-control" id="categoriaId" name="categoriaId">
            </div>
            <div class="mb-3 col-4">
              <label for="quantidade" class="form-label">Quantidade:</label>
              <input type="number" class="form-control" id="quantidade" name="quantidade">
            </div>
            <div class="mb-3 col-4">
              <label for="valor" class="form-label">Valor:</label>
              <input type="text" class="form-control" id="valor" name="valor">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>