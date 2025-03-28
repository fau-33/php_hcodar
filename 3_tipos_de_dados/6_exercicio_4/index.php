<?php
  /**
   * Exercício 4:
   * Crie um arquivo PHP
   * Imprima três floats
   * Utilize a funação is_float() em um deles
   */

  $a = 1.1;
  $b = 1;
  $c = "1.1";

  if(is_float($a)) {
    echo "É um float 1<br>";
  }

  if(is_float($b)) {
    echo "É um float 2<br>";
  }

  if(is_float($c)) {
    echo "É um float 3<br>";
  }