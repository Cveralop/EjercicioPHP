<?php
include_once("configuracion.php");

$sentencia = $base_datos->query("SELECT * FROM usuarios");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>