<?php 

$server = "localhost";
$user = "root";
$password = "root";
$database = "aula_13";
$port = 3307;

$conn = new mysqli($server, $user, $password, $database, $port);
if($conn -> connect_errno){
    die("Erro na conexão com o bando de dados" . $conn->connect_error);
}else {
	echo("Conectado com sucesso!!");
}
