<?php
  class Pessoa {
    function falar() {
      echo "Olá pessoal";
    }
  }
  $flavio = new Pessoa();
  $flavio->nome = "Flávio";
  echo $flavio->nome;
  echo "<br>";
  echo $flavio-> falar();