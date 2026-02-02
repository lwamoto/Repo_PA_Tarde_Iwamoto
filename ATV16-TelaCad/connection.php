<?php
$server = "localhost";
$user = "root";
$password = "root";
$database = "Aula16";
$port = 3307;

$conn = new mysqli($server, $user, $password, $database, $port);

if ($conn ->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
else{
    echo 'Connection';
}
?>