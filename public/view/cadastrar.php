
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/assets/css/styles.css" rel="stylesheet">
    <link href="/assets/css/login.css" rel="stylesheet">
   
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <!-- Formulário de Login -->
    <main id="loginForm" class="form-signin w-100 m-auto">
        <form action="/cadastrar/inserir" method="POST">
            <div class="d-flex align-items-center mb-4">
                <img class="p-0" src="/assets/images/logotipo.svg" width="72" height="57">

                <h1 class="h3 fw-normal my-0 ms-2">MS Code - Estoque</h1>
            </div>

            <div class="form-floating">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="name@example.com">
                <label for="email">Nome completo</label>
               
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
               
            </div>
           
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="senha" placeholder="Password">
                <label for="senha">Senha</label>
            </div>
           

            <button class="btn btn-primary w-100 py-2" type="submit">Cadastar</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
        </form>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Por favor, preencha todos o campo de cadastro.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
      
       
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            let InputEmail = document.getElementById('email');
            let InputSenha = document.getElementById('senha');

            if (InputEmail.value === '' && InputSenha.value === '' ) {
                event.preventDefault(); // Impede o envio do formulário
             
                var meuModal = new bootstrap.Modal(document.getElementById('meuModal'));
                meuModal.show();
            }
        });

    </script>
</body>
</html>
