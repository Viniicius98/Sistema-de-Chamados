<?php

session_start();





$titulo = str_replace('#', ',', $_POST['titulo']);
$categoria = str_replace('#', ',', $_POST['categoria']);
$descricao = str_replace('#', ',', $_POST['descricao']);

$chamado = fopen('chamado.hd', 'a');



$texto = $_SESSION['id'] . '#' . $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;

fwrite($chamado, $texto);

fclose($chamado);


header('Location:../views/app/cadastrar_chamado.php');
