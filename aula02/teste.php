<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$valor) {
    $valor = $valor * 2;
    echo $valor;
}
// $arr is now array(2, 4, 6, 8)
unset($valor); // quebra a referência com o último elemento
?>