<?php

include 'conexion.php';
session_start();
$idartifav = $_GET['id'];
$idus = $_SESSION['id'];
$eliminarartifav = "DELETE FROM `easy`.`cart` WHERE `iditem`='$idartifav' AND `idbuyer`='$idus';";
$resultadoarticulos = mysqli_query($conexion, $eliminarartifav);
if (!$resultadoarticulos) {
    echo '<script>'
    . 'alert("Error al eliminar el articulo");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    echo '<script>'
    . "alert('Articulo eliminado');"
    . 'window.history.go(-1);'
    . '</script>';
}
