<?php
  // Exercício 3: Variáveis e Tipos de Dados

  // Escreva um programa PHP que contenha três tipos de comentários: comentário de linha, comentário de bloco e comentário de documentação. Explique brevemente o uso de cada um desses comentários dentro do código.

  // Comentário de linha
  /*
  Comentário de bloco
  pode ser usado para comentar varias linhas
  */

  /**
   * Comentário de documentação
   * usado para gerar documentação automática
   * com ferramentas como o PHPDocumentor
   */
  echo "Comentários adicionados ao código!\n";
  

  // Declaração e inicialização de variáveis primitivas
  echo "<br>";
  $idade = 25;
  
  $altura = 1.75;
  
  $inicial = "M";
  
  $estudante = true;

  echo "<br>";
  echo "Idade: $idade\n";
  echo "Altura: $altura\n";
  echo "Inicial: $inicial\n";
  echo "Estudante: " . ($estudante ? "Sim" : "Não") . "\n";
  
?>