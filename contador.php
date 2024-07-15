<?php
$caminho = "contador.txt";

# ler
$arquivo = fopen($caminho, "r");$total = fgets($arquivo,1024);fclose($arquivo);

# incrementa
$x = $total;$x += 1;

# salva
$arquivo = fopen($caminho, "w");fwrite($arquivo, $x);fclose($arquivo);