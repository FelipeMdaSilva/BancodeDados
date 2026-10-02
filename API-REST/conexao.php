<?php

$host = "192.168.10.87";
$password = "FelipeMoreno@93510488";
$usuario = "postgres";
$banco = "lojasegundao";

$pdo = new PDO (
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $password
);