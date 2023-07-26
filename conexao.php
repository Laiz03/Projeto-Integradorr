<?php

$usario = 'root';
$senha = '';
$database = 'petshop';
$host = 'localhost';

$mysqli = new mysqli($host, $usario, $senha, $database);

if($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}

?>