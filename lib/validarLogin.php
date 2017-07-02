<?php


include '../lib/Conexion.php'; 

$usuario = $_POST['nombre'];
$pass = $_POST["clave"];
$sql="SELECT * FROM usuario WHERE nombre_usuario='".$usuario."' AND clave_usuario='".$pass."'";
$resultado=mysqli_query($con,$sql);
if (($resultado->num_rows)>= 1):
	session_start();
	$_SESSION['nombre'] = $usuario;
	header("Location: ../IndexLogeado.php");
else:
	echo "<script language=JavaScript>alert('El usuario o la contraseña no son correctos');
		   history.back();</script>";
endif;
	echo "</center>";
	mysqli_close($con);
 
?>