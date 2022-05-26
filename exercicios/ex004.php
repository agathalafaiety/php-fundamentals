<!-- 4. Crie algumas variáveis com tipos de dados diferentes: string, int e
boolean, por exemplo;
● Cheque se a variável é um inteiro;
● Caso sim, apresente uma mensagem confirmando o tipo de dado;
● Caso não, apresente outra mensagem; -->

<?php

$nome = "Agatha";
$idade = 18;
$confirmacao = true;
$confirmacao2 = false;

if ($idade >= 18) {
    $confirmacao = true;
    echo "$confirmacao<br>";
} elseif ($idade <= 18) {
    echo "$confirmacao2<br>";
    $confirmacao2 = false;
}

?>