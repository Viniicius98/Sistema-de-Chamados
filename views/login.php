<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
                </div>
            </div>
        </div>
    </nav>
    <main class="container-main">
        <form class="login-form bg-dark" action="../controllers/login_controller.php" method="post">


            <label for="exampleFormControlInput1" class="form-label m-3 fw-bold text-light fs-4 text">E-mail</label>
            <div class="mb-3  d-flex justify-content-center align-items-center">

                <!-- Input com largura definida como 50% do contêiner pai -->
                <input type="email" name='email' class="form-control w-75  text-secondary" id="exampleFormControlInput1" placeholder="nome@exemplo.com">

            </div>
            <label for="inputPassword5" class="form-label m-3 fw-bold  text-light fs-4 text">Senha</label>
            <div class="mb-3  d-flex justify-content-center align-items-center">
                <input type="password" name='senha' id="inputPassword5" class="form-control w-75  " aria-describedby="passwordHelpBlock">

            </div>
            <?php
            if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div class="text-danger d-flex justify-content-center align-items-center">
                    Usuário ou senha inválidos
                </div>
            <?php } elseif (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                <div class="text-danger d-flex justify-content-center align-items-center">
                    Usuário não autenticado, faça seu login para prosseguir
                </div>
            <?php }

            ?>
            <div id="passwordHelpBlock" class="form-text m-3  text-light">
                Sua senha deve ter 8-20 caracteres, contendo letras e numeros, e nao deve conter espaços,caracteres especiais ou emoji.
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-secondary m-3">Entrar</button>
            </div>

        </form>




    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>