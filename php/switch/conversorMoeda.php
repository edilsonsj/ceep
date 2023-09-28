<?php
/*
Conversor de Moedas

Crie um conversor de moedas simples que permita ao usuário inserir 
um valor em uma moeda (por exemplo, dólar americano, euro, libra) e, em seguida, 
selecione a moeda de destino para a conversão (por exemplo, real brasileiro, yen japonês, dólar canadense). 
Use um switch para realizar a conversão com base na seleção do usuário.

*/

echo "Conversor de Moedas" . "<br><br>";

$valor_em_usd = 100; // Valor em dólares americanos
$moeda_destino = "BRL"; // Moeda de destino (EUR para euros, BRL para reais)

switch ($moeda_destino) {
    case "EUR":
        $taxa_de_cambio = 0.85; // Taxa de câmbio de USD para EUR
        $valor_convertido = $valor_em_usd * $taxa_de_cambio;
        echo "$valor_em_usd USD é equivalente a $valor_convertido EUR.";
        break;
    case "BRL":
        $taxa_de_cambio = 4.99; // Taxa de câmbio de USD para BRL
        $valor_convertido = $valor_em_usd * $taxa_de_cambio;
        echo "$valor_em_usd USD é equivalente a R$ $valor_convertido BRL.";
        break;
    default:
        echo "Moeda de destino não suportada.";
}
