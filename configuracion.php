<?php

$hosts= "localhost";
$contase�a="";
$usuario="root";
$nombre="registro";

try {
    $base_datos = new PDO('mysql:host=localhost; dbname='.$nombre,$usuario,$contase�a);
    
    
    //echo "<script>alert('Conexion Correcta')</script>";
    
} catch (Exception $e) {
    
    echo "<script>alert('Error de Conexion')</script>".$e->getMessage();
}

?>