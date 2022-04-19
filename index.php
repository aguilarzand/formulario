<html>
<head>
	<meta charset="utf-8">
	<h2>Bienvenido</h2>
</head>
<body>
<?php
if(isset($_GET['error']) && $_GET['error'] == 1){
	echo "<p>Error al ingresar usuario y contraseña, favor de verificar</p>";
}
else if(isset($_GET['error']) && $_GET['error'] == 2){
	echo "<p>No se han ingresado usuario y contraseña para autenticarse</p>";
}
?>
<p>Ingresa tu nombre de usuario y contraseña:</p>
<form name="login" action="login.php" method="post">
<label for="usuario">Nombre de usuario:</label>
<input type="text" id="usuario" name="usuario">
<br />
<label for="contrasena">Contraseña:</label>
<input type="password" id="contrasena" name="contrasena">
<br />
<input type="Submit" name="enviar" value="Enviar">
</form> 
</body>
</html>
