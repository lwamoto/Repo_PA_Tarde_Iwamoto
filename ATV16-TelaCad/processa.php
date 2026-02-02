<?php

include_once "connection.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

$senha_criptografada = md5($senha);

$sql = "INSERT INTO usuario(nome, email, nascimento, senha, cpf) VALUES ('$nome','$email', '$nascimento','$senha_criptografada','$cpf')"; 

if(mysqli_query($conn, $sql)){
    return true;
}
else{
    return false;
}
