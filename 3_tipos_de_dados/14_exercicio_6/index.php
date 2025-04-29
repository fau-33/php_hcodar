<?php
  // Exercício 6: 
  // Crie um arquivo PHP
  // Crie um array com caracteristicas de um carro
  // Imprima duas caracteristicas do carro

  $carro = [
    "marca" => "Fiat",
    "modelo" => "Palio",
    "ano" => 1999,
    "cor" => "Branco"
  ];

  print_r($carro);
  echo "<br>";
  echo $carro["marca"] . "<br>";
  echo $carro["cor"] . "<br>";