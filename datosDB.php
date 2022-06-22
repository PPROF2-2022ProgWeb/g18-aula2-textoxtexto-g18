<?php
$host="127.0.0.1:3315";
$usuario="root";
$clave="123456";
$basededatos="login";

$conn = new mysqli($host, $usuario, $clave, $basededatos);
    if($conn->connect_error){
        die("Database Error : " . $conn->connect_error);
    }
?>