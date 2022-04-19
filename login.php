<?php
//conexion a la bd:
include('conexion.php');
//Recibir usuario y contrasena para verificar
$usuario = strip_tags($_POST['usuario']);
$contrasena = strip_tags($_POST['contrasena']);
//ejecutar consulta a bd y asigno a variables
$consulta = "Select user_name, pass from usuarios where user_name='".$usuario."'";
$resultado = pg_query($con,$consulta);
$resultado = pg_fetch_assoc($resultado);
//echo "formulario: ".hash("sha256",$contrasena);
//echo "<br />";
//echo "bd: ".substr($resultado['pass'],2);
$usuariobd = $resultado['user_name'];
$contrasenabd = substr($resultado['pass'],2);
if($usuario == $usuariobd && hash("sha256",$contrasena) == $contrasenabd){
	//Se crea una sesion:
	session_start();
	//Asignar variables de sesion: autenticación exitosa
	$_SESSION['valida']=true;
	//redireccionar al menu.php
	header('Location: consulta.php');
}
else{
	//Redireccionar a index.php?error=1
	header('Location: index.php?error=1');
}
?>
