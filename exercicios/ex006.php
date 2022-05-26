<!-- 6. Crie variáveis com números e outras com string;
● Faça um if checando se é um número;
● Caso for, atribua a multiplicação deste número por 2 em outra variável;
● E crie um outro if, que checa se o novo número é maior que 100;
● Se sim, imprima uma mensagem; -->

<?php

$a = 50;
$b = "txt";

if (is_int($a)) {
    echo $mult = ($a * 2);
}

if ($mult >= 100) {
    echo (" O novo número é maior que 100 ");
}
