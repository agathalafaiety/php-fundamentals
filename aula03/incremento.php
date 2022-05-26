<?php

$x = 0;
$y = 0;

$x++;
$y = $y + 1;

echo "x " . $x . "<br>";
echo "y " . $y . "<br>";

$num1 = 2;
$num2 = 4;
$num3 = 6;
$num4 = 8;

//resultado é igual a 3
echo $resposta1 = ++$num2 - $num1;
echo "<br>";

//rtesultado é igual a 8
echo $resposta2 = --$num3 + $num1;
echo "<br>";