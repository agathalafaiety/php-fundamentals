<?php

//resultado verdadeiro

if(10>8){
    echo"Deu Certo<br>";
}

else{
    echo"Deu Ruim bobão kkkkk<br>";
}

if(2==5){
    echo"Nao vai aparecer absolutamente nada<br>";

}

else{
    echo"Deu Ruim2!!<br>";
}

//utilizar operação logica

if(10===10 && 9<3){
     
    echo"Deu certo2!!<br>";
   
}
else{
    echo"Deu Ruim3!!<br>";
}

//Exemplo com variaveis

$a = 10;
$b = 5;
$c = "Deu ruim4<br>"; 

if($a==$b){
    echo"Deu Certo<br>";
}

else{
   echo $c;
}

?>