<?php
  $a = true;

  if(is_bool($a)){
    echo "Verdadeiro 1<br>";
  }

  if(is_bool(0)){
    echo "Verdadeiro 2<br>";
  }

  if(is_bool(false)){
    echo "Verdadeiro 3<br>";
  }

  if(0 == false){
    echo "o 0 é igual ao false<br>";
  }