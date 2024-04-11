<?php

session_start();

if (!file_exists('usuarios.hd')) {

    $arquivo = fopen('usuarios.hd', 'w');
    fclose($arquivo);
    $ultimoId = 1;
} else {
    $linhas = file('usuarios.hd');
    $ultimaLinha = end($linhas);
    $ultimoId = explode('#', $ultimaLinha)[0];
    $ultimoId++;
}

$_SESSION['id'] = $ultimoId;

$_SESSION['nome'] = $_POST['nome'];

$_SESSION['sobrenome'] = $_POST['sobrenome'];

$_SESSION['cidade'] = $_POST['cidade'];

$_SESSION['estado'] = $_POST['estado'];

$_SESSION['email'] = $_POST['email'];

$_SESSION['senha'] = $_POST['senha'];

$_SESSION['termo'] = $_POST['termo'];



$arquivo = fopen('usuarios.hd', 'a');



$texto = $_SESSION['id'] . '#' . $_POST['nome'] . '#' . $_POST['sobrenome'] . '#' . $_POST['cidade'] . '#' . $_POST['estado'] . '#' . $_POST['email'] . '#' . $_POST['senha'] . '#' . $_POST['termo'] . PHP_EOL;

fwrite($arquivo, $texto);

fclose($arquivo);


header('Location:../views/login.php');
