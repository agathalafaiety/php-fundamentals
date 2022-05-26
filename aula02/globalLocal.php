<?php

    $x = 10;
    echo "X global <br>";

function teste (){
    $x = 5;
    echo "X Local <br>";
}

teste();