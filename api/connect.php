<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: https://www.legendarycommunity.com.br");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, Accept");
header("Access-Control-Allow-Credentials: true");

date_default_timezone_set('America/Sao_Paulo');

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Falha na conexão com o banco de dados: " . $conn->connect_error]));
}

$conn->close();
?>
