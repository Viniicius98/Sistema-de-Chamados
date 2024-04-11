<?php


$chamados = array();
$arquivo_path = __DIR__ . '\chamado.hd';

// Verifica se o arquivo existe antes de tentar abri-lo
if (file_exists($arquivo_path)) {
    $arquivo = fopen($arquivo_path, 'r');

    // Verifica se o arquivo foi aberto com sucesso
    if ($arquivo) {
        while (!feof($arquivo)) {
            $registro = fgets($arquivo);
            $chamados[] = $registro;
        }

        // Fechando o arquivo
        fclose($arquivo);
    } else {
        // Se houver um problema ao abrir o arquivo, exibe uma mensagem de erro
        echo "Falha ao abrir o arquivo.";
    }
}
