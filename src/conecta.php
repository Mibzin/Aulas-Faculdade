<?php
$host = 'db'; // host aonde o MySQL está rodando, pode ser 'localhost' ou 'db'
$db = 'app_db'; // nome do banco de dados que criamos no docker-compose.yml
$user = 'app_user'; // usuário do banco de dados
$pass = 'app_pass'; // senha do banco de dados
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4"; // Para habilitar acentos e caracteres especiais

try {
    $pdo = new PDO($dsn, $user, $pass, [ // PDO é uma extensão do PHP para acessar bancos de dados
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch associativo por padrão, ou seja, retorna um array associativo em vez de um array numérico
    ]);
// echo "conectado com sucesso!";
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage()); // die interrompe a execução do script e exibe a mensagem de erro
}