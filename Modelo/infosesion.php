<?php

include('conexion.php');
$sql=mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `email`='$correo';");
$user=mysqli_fetch_array($sql);
session_start();
$_SESSION['id']=$user['id'];
$_SESSION['nombre']=$user['nombre'];
$_SESSION['apellido']=$user['apellido'];
$_SESSION['email']=$user['email'];
$_SESSION['telefono']=$user['telefono'];
$_SESSION['foto']=$user['foto'];
$_SESSION['clave']=$user['pass'];
@$_SESSION['calificacion']=$user['calificacion'];
@$_SESSION['ventasconcretadas']=$user['ventasconcretadas'];
mysqli_close($conexion);
