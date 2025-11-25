<?php
  $x = 10;
  $y = &$x;
  
  echo $x;
  echo"<br>";
  echo $y;
  echo "<br>";

  $y = 20;

  echo "Atribuição após ref";
  echo "<br>";
  echo $x;
  echo"<br>";
  echo $y;
  echo "<br>";

  $x = 25;

  echo "Atribuição após ref 2";
  echo "<br>";
  echo $x;
  echo"<br>";
  echo $y;
  echo "<br>";

  $nome = "Flávio";
  $apelido = &$nome;
  echo $apelido;
  echo "<br>";
  echo $nome;

  echo "<br>";
  $nome2 = "João";
  $apelido2 = &$nome2;
  echo $apelido2;
  echo "<br>";
  echo $nome2;
  echo "<br>";


