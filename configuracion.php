<?php

$hosts= "localhost";
$contaseña="";
$usuario="root";
$nombre="registro";

try {
    $base_datos = new PDO('mysql:host=localhost; dbname='.$nombre,$usuario,$contaseña);
    
    
    //echo "<script>alert('Conexion Correcta')</script>";
    
} catch (Exception $e) {
    
    echo "<script>alert('Error de Conexion')</script>".$e->getMessage();
}

?>