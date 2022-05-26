<?php

if (5 < 10 && 10 > 5) {
   echo "entrou no if 1" . "<br>";
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;


if ($a > $b && $c == $d) {
    echo "entrou no if 2" . "<br>";
 }

 if ($a > $b || $c == $d) {
    echo "entrou no if 3" . "<br>";
 }

 