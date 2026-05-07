<?php
$a=30;
$a=10;
$a=5;
echo "<br> $a";
// 0 1 2
$arr=[30,10,5];
$arr[0]+=5; // +5
echo "<br>arr[0] =" .$arr[0]; // 30
echo "<br>arr[1] =" .$arr[1]; // 10
echo "<br>arr[2] =" .$arr[2]; // 5

echo "<hr>";

$uf=["SP", "RJ", "MG", "ES"];
echo "<br>uf[2] =" .$uf[2]; // MG
echo "<pre>"; print_r($uf);echo "</pre>";

echo "<hr>";

$estudante=[
    "id" => 1,
    "cpf" => "123.456.789-00",
    "nome" => "Neymar",
    "sobrenome" => "Silva",
    "idade" => 33,
    "trabalho" => "Jogador de Futebol"
];
// echo "<br> id: " .$estudante["id"];
// echo "<br> cpf: " .$estudante["cpf"];
// echo "<br> nome: " .$estudante["nome"];
// echo "<br> sobrenome: " .$estudante["sobrenome"];
// echo "<br> idade: " .$estudante["idade"];
// echo "<br> trabalho: " .$estudante["trabalho"];
echo "<pre>"; print_r($estudante); echo "</pre>";

echo "<hr>";

$multi=[
    [10,"aviao",30],
    [40,50,"ilha"],
    ["agua",80,"barco"]
];
echo "<br>" .$multi[2][0]. "<br>"; // agua
echo "<br>" .$multi[0][1]. "<br>"; //aviao
echo "<br>" .$multi[2][2]. "<br>"; // ilha
echo "<br>" .$multi[2][2]. "<br>"; // barco
// echo "<pre>"; print_r($multi); echo "</pre>";
// echo "<br> multi[1][2] = " .$multi[1][2]; // 60

echo "<hr>";

$bd=[
    ["id" => 1, "nome" => "Bete", "curso" => "TASD"],
    ["id" => 2, "nome" => "Cleide", "curso" => "TBD"],
    ["id" => 3, "nome" => "Beto", "curso" => "TJD"]
];
echo "<br> nome: " .$bd[2]["nome"];
echo "<br> curso: " .$bd[0]["curso"];
echo "<br> id: " .$bd[1]["id"];

?>