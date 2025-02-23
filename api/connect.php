<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: https://www.legendarycommunity.com.br");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, Accept");
header("Access-Control-Allow-Credentials: true");

date_default_timezone_set('America/Sao_Paulo');

$servername = "190.115.197.83";
$username = "u89165_sz2xssQuRo";
$password = "bHSOP+E=V+RP@0cf9rLw5xGl";
$dbname = "s89165_minecraft";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Falha na conexão com o banco de dados: " . $conn->connect_error]));
}

$conn->close();
?>
