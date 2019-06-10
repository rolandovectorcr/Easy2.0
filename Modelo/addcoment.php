<?php

include 'conexion.php';



$idarticulo = $_POST["idarticulo"];
$idanunciante = $_POST["idanunciante"];
$idcomentante = $_POST["idcomentante"];
$nombre = $_POST["nombre"];
$comentario = $_POST["comentario"];
$fotocomentante = $_POST["fotocomentante"];
$FecHr = date('Y/m/d H:i');
$colorido;
session_start();
if ($_SESSION) {
    if ($idanunciante == $idcomentante) {
        $colorido = "#660066";
    } else {
        $colorido = "#009999";
    }
} else {
    $colorido = "#cccc00";
}

$insertar = "INSERT INTO `easy`.`comentarios` (`id`, `idarticulo`, `idanunciante`, `idcomentante`, `nombre`, `fecha`, `comentario`,`color`,`imgcomentante`) VALUES (NULL, '$idarticulo', '$idanunciante', '$idcomentante', '$nombre', '$FecHr', '$comentario', '$colorido', '$fotocomentante')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script>'
    . 'alert("Error al publicar el servicio");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    echo '<script>'
    . 'alert("Gracias por comentar");'
    . 'window.history.go(-1);'
    . '</script>';
}       