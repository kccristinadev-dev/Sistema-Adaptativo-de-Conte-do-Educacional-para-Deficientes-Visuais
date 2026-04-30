<?php

$servername = ".com";
$username   = "adapta_system";
$password   = "sua_senha";
$dbname     = "adapta_system";

try {
    $conexao = new PDO(
        "mysql:host=$servername;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erro na conexão.";
}
?>