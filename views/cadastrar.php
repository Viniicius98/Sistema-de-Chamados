<?php


require_once "../controllers/api_estados_br.php";



?>



<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../public/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="../public/img/chamados.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> Sistemas de Chamado</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    <a class="nav-link" href="login.php">Login</a>
                    <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                    <!-- <a class="nav-link" href="../controllers/logoffController.php">Sair</a> -->
                </div>
            </div>
        </div>
    </nav>
    <main class="container">
        <form class="row g-3 bg-dark mt-5 rounded" method="post" action="../controllers/cadastrar_controller.php">
            <div class="row justify-content-center mt-3 ">
                <div class="col-md-4">
                    <label for="inputNome" class="form-label">Nome</label>
                    <input type="text" name='nome' class="form-control " id="inputNome" placeholder="Digite seu nome" required>
                    <div id="feedbackNome" class="valid-feedback" style="display: block;">

                    </div>
                </div>
                <div class="col-md-4">
                    <label for="inputSobrenome" class="form-label">Sobrenome</label>
                    <input type="text" name='sobrenome' class="form-control " id="inputSobrenome" placeholder="Digite seu sobrenome" required>
                    <div id="feedbackSobreNome" class="valid-feedback" style="display: block;">

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <label for="inputCidade" class="form-label mt-2">Cidade</label>
                    <input type="text" name='cidade' class="form-control " id="inputCidade" placeholder="Digite sua cidade" required>
                    <div id="feedbackCidade" class="invalid-feedback" style="display: block;">

                    </div>
                </div>
                <div class="col-md-3">
                    <label for="inputEstado" class="form-label mt-2">Estado</label>
                    <select class="form-select " name='estado' id="inputEstado" aria-describedby="inputEstadoFeedback" required>
                        <option value="">Selecione seu Estado...</option>
                        <?php
                        foreach ($estados as $estado) { ?>
                            <option><?= $estado['nome'] . ' - ' . $estado['sigla'] ?></option>
                        <?php } ?>
                    </select>
                    <div id="inputEstadoFeedback" class="invalid-feedback">
                        Por favor informe um Estado válido.
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-md-4">
                    <label for="inputEmail" class="form-label  ">E-mail</label>
                    <input type="email" name='email' class="form-control w-75  text-secondary" id="inputEmail" placeholder="nome@exemplo.com">
                    <div id="inputEmailFeedback" class="invalid-feedback">

                    </div>
                </div>
                <div class="col-md-4 ">
                    <label for="inputSenha" class="form-label">Senha</label>
                    <input type="password" name='senha' id="inputSenha" placeholder="Digite sua senha" class="form-control w-75 " aria-describedby="passwordHelpBlock">
                    <div id="inputSenhaFeedback" class="invalid-feedback">
                    </div>
                </div>
            </div>



            <div class="d-flex justify-content-center mt-5 ">
                <div class="form-check">
                    <input class="form-check-input is-invalid" name='termo' type="checkbox" value="Sim" id="checkTermo" aria-describedby="checkTermoFeedback" required>
                    <label id="termoFeedback" class="form-check-label" for="checkTermo">
                        Concorde com os termos e condições.
                    </label>
                    <div id="checkTermoFeedback" class="invalid-feedback">

                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3 ">
                <button class="btn btn-primary" id="btn-cadastrar" type="submit">Cadastrar</button>
            </div>
        </form>



    </main>
    <script src="../public/js/cadastrar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>