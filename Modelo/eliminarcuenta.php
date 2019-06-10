<?php

include 'conexion.php';
session_start();
$clave = $_POST["clave"];
$id = $_SESSION['id'];
$hash = $_SESSION['clave'];
if (password_verify($clave, $hash)){    
    $eliminar = "DELETE FROM `easy`.`user` WHERE `id`='$id';";
    $eliminararticulos = "DELETE FROM `easy`.`article` WHERE `idvendedor`='$id';";
    $resultado = mysqli_query($conexion, $eliminar);
    $resultadoarticulos = mysqli_query($conexion, $eliminararticulos);
    if (!$resultado) {
        echo '<script>'
        . 'alert("Error al eliminar la cuenta");'
        . 'window.history.go(-1);'
        . '</script>';
    } else {
        session_destroy();
        echo '<script>'
        . 'alert("Cuenta eliminida");'
        . '</script>';
        echo "<script>location.href='../index.php'</script>";
    }
} else {
    echo '<script>'
    . 'alert("Contraseña incorrecta");'
    . 'window.history.go(-1);'
    . '</script>';
}

