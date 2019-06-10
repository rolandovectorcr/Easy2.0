<?php 
#este se utiliza para cerrar la sesion y destruir las variables
session_start();
if($_SESSION['nombre']){	
	session_destroy();
	header("location:../index.php");
}
else{
	header("location:../index.php");
}
?>