<h1>pg02_1 - 12/3/26</h1>

<?php
$idade=34;
echo "<br>idade = $idade<br>";
$cep = "09972-300";
echo "cep = $cep<br>";
$preco= 1003828843.72;
echo "preço = R$ ";
echo number_format($preco,2,",",".");
echo "<hr>";

$cor ="purple";
echo "cor = $cor<br>";
echo 'cor = $cor<br>';
echo "<h2 style='color:$cor;'>Outro Titulo 1</h2>";
$ativo = true;
echo "está ativo? $ativo <br>";
echo "<hr>";
echo "Aquela era: ".$cor;
$nota = 9.4; // 7.8 - 7 = 0.8, mostra apenas centavos
echo "<br>nota será igual = ".(int)$nota;

?>

<h2 style="color:gold;">Titulo 2</h2>
