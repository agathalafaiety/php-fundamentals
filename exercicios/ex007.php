<!-- 7. Crie uma variável que recebe uma velocidade de um carro;
● Depois crie uma estrutura if que verifica essa velocidade;
● Se a velocidade for menor que 40, imprima que o motorista está na
velocidade correta;
● Se igual a 40, imprima uma mensagem para o motorista tomar cuidado;
● Se for maior de 40, imprima uma mensagem de multa; -->

<?php

$velocidade = 100;

if ($velocidade < 40) {
    echo "o motorista está na velocidade correta<br>";
} elseif ($velocidade = 40) {
    echo "Tome Cuidado!<br>";
} elseif ($velocidade > 40) {
    echo "Sujeito a Multa!<br>";
}

?>