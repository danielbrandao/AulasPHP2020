<?php

$n1 = $_REQUEST['n1'];
$n2 = $_REQUEST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];

echo "arquivo gerado com sucesso!";
echo $n1;
echo $n2;
echo $n3;
echo $n4;
echo $n5;

$arquivo = fopen("arquivo.txt", "a");

fwrite($arquivo,"$n1 $n2 $n3 $n4 $n5");

fclose($arquivo);

?>