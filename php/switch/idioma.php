<?php 

$idioma = 'espanhol';

switch ($idioma) {
    case 'ingles':
        echo 'Hello, world!';
        break;
    case 'portugues':
        echo 'Ola, Mundo!';
        break;
    case 'espanhol':
        echo 'Hola, Mundo!';
        break;
    default:
        echo 'Não é um idioma suportado!';
        break;
}