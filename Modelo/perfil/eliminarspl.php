<?php

include 'conexion.php';
session_start();
$idartieli = $_GET['articulo'];
$eliminararticulos = "DELETE FROM `easy`.`spl` WHERE `id`='$idartieli';";
$resultadoarticulos = mysqli_query($conexion, $eliminararticulos);
if (!$resultadoarticulos) {
    echo '<script>'
    . 'alert("Error al eliminar el articulo");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    echo '<script>'
    . "alert('Articulo eliminado');"
    . "location.href='../vistas/user.php#user';</script>";
}
