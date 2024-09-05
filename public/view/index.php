
<!doctype html>
<html lang="pt-BR">

<?php require_once('includes/head.php')?>

<body>
    <main>
        <div class="border-bottom mb-2">
            <div class="container">
              <?php require_once('includes/header.php')?>
            </div>
        </div>
        <div class="container py-5">
            <!-- Conteúdo da página aqui -->
             <h1>
             
                Bem vindo   <?php   echo $_SESSION['nome']?>
             </h1>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
