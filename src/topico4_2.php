<?php
$a=10; // a = 10 int
$b="10"; // b = "10" string 
echo "Igualdade = ".($a==$b)."<br>"; // true
echo "Idêntico = ".($a===$b)."<br>"; // false
echo "Não igual = ".($a!=$b)."<br>"; // false
echo "Não Idêntico = ".($a!==$b)."<br>"; // true
echo "<br><hr>";

$a=10;
$b=20;
$c=50;
$d=!($a<=$b); // ! operador lógico "não" (NOT) - inverte o valor lógico da expressão
var_dump($d); // false
echo "<hr>";

$e=($a<=$c)&&($c>1000);
var_dump($e); // false 
echo "<hr>";

$f=($a>$b)||($c<1000); // || operador lógico "ou" (OR) - retorna true se pelo menos uma das expressões for verdadeira
var_dump($f); // true
echo "<hr>";

$g=($a<$b)xor($b<$c); // xor operador lógico "ou exclusivo" (XOR) - retorna true se exatamente uma das expressões for verdadeira
var_dump($g); // false
echo "<hr>";

$d=($a<=$b) ? "Verdadeiro" : "Falso"; // ? operador ternário - avalia a expressão antes do ? e retorna o valor após o ? se for true, ou o valor após o : se for false
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
echo "<hr>";



?>