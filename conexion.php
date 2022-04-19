<?php
//Conexion al manejador y base de datos
$con = pg_connect("dbname=sessiondb user=user_session password=hola123 port=5432") or die (pg_last_error());
?>
