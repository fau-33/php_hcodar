<?php
  // Cases não é sensitive
  echo "testando 1";
  echo "testando 2<br>";
  ECHO "testando 3<br>";

  // Variáveis são sensitive
  $nome = "Flávio";
  $NOME = "teste";

  echo $nome;
  echo "<br>";
  echo $NOME;
?>