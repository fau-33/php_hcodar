<?php
  if(is_int(10)) { // true
    echo "10 é um inteiro";
  } 

  if(is_int("Não é um inteiro")) { // false
    echo " É um inteiro";
  } 

  $numero = 100000;
  if(is_int($numero)) { // true
    echo " $numero é um inteiro";
  }