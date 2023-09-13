<?php

$dia_da_semana = 'sabado';

switch ($dia_da_semana) {
    case 'segunda':
        echo 'Hoje é segunda-feira';
        break;
    case 'terca':
        echo 'Hoje é terca-feira';
        break;
    case 'quarta':
        echo 'Hoje é quarta-feira';
        break;
    case 'quinta':
        echo 'Hoje é quinta-feira';
        break;
    case 'sexta':
        echo 'Hoje é sexta-feira';
        break;
    case 'sabado':
        echo 'Hoje é sabado';
        break;
    case 'domingo':
        echo 'Hoje é domingo';
        break;
    default:
        echo $dia_da_semana . ' não é um dia válido.';
}