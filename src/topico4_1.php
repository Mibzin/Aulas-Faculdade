<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);//12
echo "<br>Subtração:".($a - $b);//8
echo "<br>Multiplicação:".($a * $b);//20
echo "<br>Divisão:".($a / $b);//5
echo "<br>Módulo:".($a % $b);//0
echo "<br>Exponenciação:".($a ** $b);//100

// Regra 1:a variavel do lado esquerdo tem que ter valor inicial
// Regra 2: a variavel do lado esquerdo do sinal de igual, recebe o valor
?>
<hr>

<?php
$a=10;
$b=2;
$a+=$b;//$a=$a+b//$a=10=2//12
$b-=5;//$b=2-5//$b=-3
echo "a = ".$a;//a = 12
echo "<br>b = ".$b;//b = -3
$c=11;
$d=6;
$c%=$d;//$c=11%6//$c=5
$d+=$a;//$d=6+12//$d=18
echo "<br>c = ".$c;//c = 5
echo "<br>d = ".$d;//d = 18

$n="cinco ";
$n.=$c;
echo "<br>n = ".$n;

// ++ incremmeta sempre 1
// -- decrementa sempre 1
?>

<hr>

<?php
$x = 100;
echo "x = ".$x++;//100, pós incremento .$x++
echo "<br>x final = ".$x;// x final= 101

?><hr>

<?php
$x = 100;
echo "x = ".++$x;//100, pré incremento .++$x
echo "<br>x final = ".$x;// x final= 101

echo "<hr>";
$i=10;

echo "<br>i  = ".$i;// i = 10
$i++;// i = 11
$i++;// i = 12
++$i;// i = 13
// $i+=3; tipo de looping 

echo "<br>i  = ".$i;// i = 13
$i--;// i = 12

--$i; // i = 11
echo "<br>i  = ".$i;// i = 11

?>