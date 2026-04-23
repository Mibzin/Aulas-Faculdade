<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}
else{
    echo "Você é menor de idade.";
}
?>

<hr>

<?php

$semaforo = "amarelo";

if ($semaforo == "amarelo") {
    echo "Atenção! O semáforo está amarelo.";
}
elseif ($semaforo == "vermelho") {
    echo "Pare! O semáforo está vermelho.";
}
elseif ($semaforo == "verde") {
    echo "Siga! O semáforo está verde.";
}
else {
    echo "Essa cor não é válida.";
}
echo "<hr>";

$semaforo = "vermelho";

switch ($semaforo) {
    case "amarelo":
        echo "Atenção! O semáforo está amarelo.";
        break;
    case "vermelho":
        echo "Pare! O semáforo está vermelho.";
        break;
    case "verde":
        echo "Siga! O semáforo está verde.";
        break;
    default:
        echo "Essa cor não é válida.";
}   

echo "<hr>";

$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}

echo "<hr>";

date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para São Paulo, Brasil
echo date('Y-m-d H:i:s');  // Exibe a data e hora atual no formato "Ano-Mês-Dia Hora:Minuto:Segundo"    

?>

<hr>

<?php
$nome = "Uninove";
echo "nome = $nome";
echo "<br>MD5 = " . md5($nome); // MD5 é um algoritmo de hash que gera uma string de 32 caracteres a partir de uma entrada. Ele é amplamente utilizado para verificar a integridade dos dados, mas não é recomendado para armazenar senhas devido à sua vulnerabilidade a ataques de força bruta e colisões.
$hash = password_hash($nome, PASSWORD_DEFAULT); // Hash é uma função que gera um hash seguro a partir de uma string. Ele é recomendado para armazenar senhas, pois utiliza algoritmos de hash mais robustos e inclui um salt (valor aleatório) para aumentar a segurança contra ataques de força bruta e colisões.
echo "<br>Hash = " . $hash;
?>