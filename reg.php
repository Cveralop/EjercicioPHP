<?php

include_once("configuracion.php");

$nombre= $_POST["name"];
$apellido= $_POST["lastname"];
$rut = $_POST["rut"];
$direccion= $_POST["direccion"];
$fecha = $_POST["fecha"];
$cargo= $_POST["cargo"];

$nuevafecha = date('Y-m-d', strtotime($fecha));

$sentencia = $base_datos->prepare("INSERT INTO usuarios (Nombre,Apellido,Rut,Direccion,F_ingre,Cargo)
VALUES (:name, :lastname, :rut, :direccion, :fecha, :cargo);");

$sentencia->bindParam(':name',$nombre);
$sentencia->bindParam(':lastname',$apellido);
$sentencia->bindParam(':rut',$rut);
$sentencia->bindParam(':direccion',$direccion);
$sentencia->bindParam(':fecha',$nuevafecha);
$sentencia->bindParam(':cargo',$cargo);

if($sentencia->execute()){
    return header("location:index.php");
}else{
    echo "Error de Registro";
    die();
}