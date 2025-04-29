<?php
  // Exercício 7: 
  // Crie um arquivo PHP
  // Crie um array associativo com caracteristicas de um pessoa
  // Desafio: faça um if checando se a pessoa é maior de idade ou não imprimindo a mensagem adequada

  $pessoa = [
    "nome" => "João",
    "idade" => 20,
    "sexo" => "Masculino"
  ];

  if ($pessoa["idade"] >= 18) {
    echo "Maior de idade";
  } else {
    echo "Menor de idade";
  }

  