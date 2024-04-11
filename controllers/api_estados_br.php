<?php
//Fetch dos Estados brasileiros
// URL da API do IBGE para obter os estados brasileiros
$url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados';

// Realiza a requisição para a API e obtém os dados
$dados_json = file_get_contents($url);

// Converte os dados JSON para um array associativo
$estados = json_decode($dados_json, true);

// Exibe os estados obtidos da API