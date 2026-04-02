<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Par- Impar </h1>
    <form method="post" action=""> 
        <label for="numero">Digite um número:</label>
        <input type="number" id="num" name="num" required> // required para tornar o campo obrigatório
        <input type="submit" value="Verificar">
    </form>
    
    <?php
        if(count($_POST) == 0) exit; // exit para evitar que o código seja executado antes do envio do formulário
        $num = $_POST['num']; // $_POST é um array associativo que contém os dados enviados pelo formulário usando o método POST
        $res= ($num % 2 == 0) ? "Par" : "Ímpar"; 
        echo "<br>O número $num é $res.";

    ?>
    
</body>
</html>