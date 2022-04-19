<?php
//Liberar variables de sesión:
session_start();
session_unset();
//Destruir la sesión:
session_destroy();
//Redirigir a index.php:
header('Location: index.php');
?>
