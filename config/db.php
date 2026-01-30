<?php
/**
 * Configuração da Base de Dados MySQL (Substitui a versão SQLite)
 */

// Configurações do seu servidor MySQL
$host = 'localhost';         // Geralmente 'localhost' ou o IP do servidor
$dbname = 'nome_da_base_de_dados';
$username = 'seu_utilizador';
$password = 'sua_senha';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    // Criar tabela de contactos se não existir (Sintaxe MySQL)
    // Nota: Em MySQL usamos AUTO_INCREMENT em vez de AUTOINCREMENT
    $sql = "CREATE TABLE IF NOT EXISTS contatos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        mensagem TEXT NOT NULL,
        data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
    $pdo->exec($sql);

} catch (PDOException $e) {
    // Em produção, não é recomendado mostrar o erro detalhado ao utilizador
    die("Erro na conexão com a base de dados MySQL: " . $e->getMessage());
}
?>
