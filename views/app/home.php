<?php

require_once "../../controllers/valida_acesso_controller.php";

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="../public/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="../public/img/chamados.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> Sistemas de Chamado</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    <!-- <a class="nav-link" href="cadastrar.php">Cadastrar</a> -->
                    <a class="nav-link" href="../../controllers/logoff_controller.php">Sair</a>
                </div>
            </div>
            <p class="navbar-brand">Bem vindo <?= $_SESSION['nome'] ?>. Hoje é <?= strftime('%A, %d de %B de %Y', strtotime('today')); ?></p>


        </div>
    </nav>
    <main class="container">
        <div class="container">
            <div class="row">
                <div class="card-home mt-4">
                    <div class="card">
                        <div class="card-header">
                            Menu
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 d-flex flex-column align-items-center">
                                    <a href="cadastrar_chamado.php">
                                        <img src="../../public/img/tarefa.png" width="70" height="70">
                                    </a>
                                    <p><b>Cadastrar</b></p>
                                </div>
                                <div class="col-6 d-flex flex-column align-items-center">
                                    <a href="consultar.php">
                                        <img src="../../public/img/consultar.png" width="70" height="70">
                                    </a>
                                    <p><b>Consultar</b></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>