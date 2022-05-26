<!-- 1. Faça as seguintes verificações em estruturas if:
● 5 é maior que 2?
● Matheus é diferente de Pedro
● 12 é menor ou igual a 11
● Você deve inserir os valores em variáveis; -->

<?php

$a = 5;
$b = 2;
$c = 12;
$d = 11;
$nome1 = "Matheus";
$nome2 = "Pedro";

if ($a > $b) {
    echo " O numero Cinco(5) é maior que o numero Dois(2)!<br>";
}

if ($nome1 !== $nome2) {
    echo "O Matheus é diferente do Pedro!<br>";
}

if ($c <= $d) {
    echo "Tudo Certo!<br>";
} else {
    echo "Erro!<br>";
}

?>