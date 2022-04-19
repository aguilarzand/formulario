<?php
//Conexion al manejador y base de datos
echo "intentara la conexion";
$con = pg_connect("dbname=formulario user=usuario1 password=hola123 port=5432") or die (pg_last_error());
var_dump($con);
?>
