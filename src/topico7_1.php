<?php
echo "<h1>while <br></h1>";
$i=0;
    while ($i <= 5) {
        echo "$i";
        $i++;
    }
echo "<hr>";
    $i=11;
    while ($i < 15) {
        echo "$i";
        $i++;
    }
echo "<hr>";
    $i=4;
    while ($i >= 0) {
        echo "$i";
        $i--;
    }
echo "<hr>";
    $i=0;
    while ($i <= 10) {
        echo "$i";
        $i+=2;
    }
/*
Saída:
1) valor inicial? 0
2) condição? $i <= 5
3) contador? $i++
4) quantas vezes o looping será executado? 6
5) qual valo que tornou a condição falsa? 6
----------------
Saída: 11 12 13 14
1) valor inicial? 11
2) condição? $i < 15
3) contador? $i++
4) quantas vezes o looping será executado? 4
5) qual valo que tornou a condição falsa? 15
----------------
Saída: 4 3 2 1 0 
1) valor inicial? 4
2) condição? $i >= 0
3) contador? $i--
4) quantas vezes o looping será executado? 5
5) qual valo que tornou a condição falsa? -1
----------------
Saída: 0 2 4 6 8 10
1) valor inicial? 0
2) condição? $i <= 10
3) contador? $i+=2
4) quantas vezes o looping será executado? 6
5) qual valo que tornou a condição falsa? 12
*/
echo "<h1>do while<br></h1>";
$i=0;
    do { // do while é um looping que executa o bloco de código pelo menos uma vez, mesmo que a condição seja falsa.
        echo "$i";
        $i++;
    } while ($i <= 5);

echo "<h1>for<br></h1>";
    for ($i=0; $i <= 5; $i++) {
        echo "$i";
    }
echo "<h1>Looping alinhado<br></h1>";
    for ($i=4; $i < 7; $i++) { // looping externo // segundos
        for ($j=0; $j < 3; $j++) { // looping interno // minutos
            echo "$i $j<br>";
        }
    }
/* 
Saída:
4 0
4 1
4 2
5 0
5 1
5 2
6 0
6 1
6 2
*/
?>