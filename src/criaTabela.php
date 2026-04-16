<?php
require_once 'conecta.php'; // require_once é usado para incluir o arquivo de conexão com o banco de dados, garantindo que ele seja incluído apenas uma vez
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT DEFAULT 0 -- default é usado para definir um valor padrão para a coluna, nesse caso, 0 para quantidade
)";
$pdo->exec($sql); // exec é um método do PDO usado para executar uma consulta SQL que não retorna resultados, como CREATE, INSERT, UPDATE ou DELETE
echo "<h1>Tabela criada com sucesso!</h1>";
//header("Location: relatorio.php?msg=tabela_pronta");