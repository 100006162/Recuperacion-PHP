<?php
$host = 'localhost';
$bdname = 'Recuperacion_PHP';
$usuario = 'root';
$contraseña = '8Dt56NN1';
try{
    $conexion = new PDO("mysql:host=$host; dbname=$bdname" , $usuario, $contraseña);
} catch(PDOException $e){
    echo "El error es:".$e->getMessage();
}
?>