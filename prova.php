<?php

 $frase = $_POST['frase'];
 
 $frase_maiuscula = strtoupper($frase);
 echo "Frase em Maiúsculas: $frase_maiuscula\n<br>";
 $tamanho = strlen($frase);
 $posicao_meio = ($tamanho / 2);
 $caracter_meio = $frase_maiuscula[$posicao_meio];
 echo "Caracter do meio: $caracter_meio\n<br>";
 $frase_sem_vogais = preg_replace('/[AEIOUaeiou]/', 'X', $frase_maiuscula);
 echo "Frase com vogais substituidas por X: $frase_sem_vogais\n<br>";
 $frase_vogais_contagem = preg_replace('/[AEIOUaeiou]/', "", $frase_maiuscula);
 $quantidade_consoantes = strlen($frase_vogais_contagem);
 echo "Quantidade de caracteres que nao sao vogais: $quantidade_consoantes\n<br>";
 $nova_frase = substr($frase_maiuscula,strpos($frase_maiuscula, "D"));
 $frase_inversa = strrev($nova_frase);
 echo "Nova frase a partir de 'd' e inversa: $frase_inversa\n<br>";
?>