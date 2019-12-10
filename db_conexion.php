<?php 

$server = "localhost";
$username = "root";
$password = "mipoepir";
$data_base ="lifecode_db_loggin";

try {
    $connexion = new PDO("mysql:host=$server; dbname=$data_base;",$username, $password);
} catch (PDOException $error) {
    die('Conexion fallida: ' . $error -> getMessage());
}

?>