<?php
$host = 'localhost';
$user = 'root';      
$pass = '';        
$dbname = 'conta'; 

$conexao = mysqli_connect($host, $user, $pass, $dbname);


if (!$conexao) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}
?>

