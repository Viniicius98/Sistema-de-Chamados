<?php


session_start();
$email = $_POST['email'];

$senha = $_POST['senha'];

$user_autenticado = false;


$usuarios = array();

$arquivo = fopen('usuarios.hd', 'r');

// Verifica se o arquivo foi aberto corretamente
if ($arquivo) {
    // Enquanto houver registros (linhas) a serem recuperados
    while (!feof($arquivo)) {
        $registro = fgets($arquivo);
        // Verifica se a linha não está em branco
        if (!empty($registro)) {
            // Divide a string em partes usando '#' como delimitador e atribui a um array associativo
            $dados = explode('#', $registro);
            // Verifica se há dados suficientes para formar um usuário válido
            if (count($dados) >= 8) {
                // Adiciona o array associativo à lista de usuários
                $usuarios[] = array(
                    'id' => $dados[0],
                    'nome' => $dados[1],
                    'sobrenome' => $dados[2],
                    'cidade' => $dados[3],
                    'estado' => $dados[4],
                    'email' => $dados[5],
                    'senha' => $dados[6],
                    'termo' => $dados[7]
                );
            }
        }
    }
    // Fecha o arquivo.hd
    fclose($arquivo);
} else {
    // Se houve um erro ao abrir o arquivo, você pode lidar com isso aqui
    echo "Erro ao abrir o arquivo de usuários.";
}

// Verifica se houve usuários carregados
if (!empty($usuarios)) {
    $user_autenticado = false;

    foreach ($usuarios as $usuario) {
        if ($usuario['email'] == $email && $usuario['senha'] == $senha) {
            $user_autenticado = true;
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['id'] = $usuario['id'];

            // break; // Se encontrou o usuário, não precisa continuar o loop
        }
    }

    if ($user_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        header("Location:../views/app/home.php");
        exit(); // Encerra o script após redirecionar
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header("Location:../views/login.php?login=erro");
        exit(); // Encerra o script após redirecionar
    }
} else {
    echo "Nenhum usuário encontrado.";
}
