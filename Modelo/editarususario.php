<?php

include 'conexion.php';
session_start();
$id = $_SESSION['id'];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];


move_uploaded_file(@$archivoe, @$destinoe);

$claveencriptada = password_hash($clave, PASSWORD_DEFAULT);

$update = "UPDATE `easy`.`user` SET `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$correo', `pass` = '$claveencriptada', `telefono` = '$telefono' WHERE `user`.`id` = '$id'";

$resultado = mysqli_query($conexion, $update);
if (!$resultado) {
    echo '<script>'
    . 'alert("Error al actualizar su perfil");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    echo '<script>'
    . 'swal("Excelente!", "Usuario creado correctamente", "success")'
    . '</script>';
    session_destroy();
    include './infosesion.php';
    echo "<script>window.history.go(-1);</script>";
}

?>