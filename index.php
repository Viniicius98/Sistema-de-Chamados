<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olá</title>
    <link rel="stylesheet" href="public/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="../public/img/chamados.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> Sistemas de Chamado</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- <a class="nav-link active" aria-current="page" href="index.php">Inicio</a> -->
                    <!-- <a class="nav-link" href="views/login.php">Login</a>
                    <a class="nav-link" href="views/cadastrar.php">Cadastrar</a> -->
                </div>
            </div>
        </div>
    </nav>
    <main>
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
                                    <a href="cadastrar.php">
                                        <img src="../public/img/cadastrar.png" width="70" height="70">
                                    </a>
                                    <p><b>Cadastrar</b></p>
                                </div>
                                <div class="col-6 d-flex flex-column align-items-center">
                                    <a href="login.php">
                                        <img src="../public/img/login.png" width="70" height="70">
                                    </a>
                                    <p><b>Login</b></p>
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