<?php
$conexion = null;
$servidor = 'localhost';
$bd= 'practicas';
$user = 'root';
$pass = '';
try{
    $conexion = new PDO('mysql:host='.$servidor.';dbname='.$bd,$user,$pass);
}catch (PDOException $e){
    echo "Error de conexion!";
    exit;
}
return $conexion;
?>