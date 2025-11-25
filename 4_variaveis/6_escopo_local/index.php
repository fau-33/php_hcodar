<?php

  $x = 5;
  echo "$x é global <br>";

function teste(){
    $x = 10;

    echo "$x é local <br>";
}
teste();

function teste2(){
    $x = 20;
    echo "$x é local <br>";
}
teste2();

$x = 4;
echo "$x é global <br>";


