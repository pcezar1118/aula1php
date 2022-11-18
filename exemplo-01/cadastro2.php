<?php 

$hostname = "localhost";
$bancodedados = "bancodedados";
$usuario = "usuario";
$senha = "senha";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_err) {
    echo "Connection failed: (". $mysqli->connect_err . ")" . $mysqli->connect_err;

}

?>