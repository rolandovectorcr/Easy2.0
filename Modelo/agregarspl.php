<?php

include 'conexion.php';
$titulospl = $_POST["titulospl"];
$categoriaspl = $_POST["categoriaspl"];
$ubicacionspl = $_POST["ubicacionspl"];
$descripcionspl = $_POST["descripcionspl"];
$telefonospl = $_POST["telefonospl"];
$horariospl = $_POST["horariospl"];
$fbspl = $_POST["fbspl"];
$pagweb = $_POST["pagweb"];


$archivo = $_FILES["fotoart"]["tmp_name"];
$nombrefoto = $_FILES["fotoart"]["name"];
$tipo = $_FILES["fotoart"]["type"];
$tamano = $_FILES["fotoart"]["size"];
$destino = 'spl/' . $nombrefoto;
move_uploaded_file($archivo, $destino);
$archivo2 = $_FILES["fotoart2"]["tmp_name"];
$nombrefoto2 = $_FILES["fotoart2"]["name"];
$tipo2 = $_FILES["fotoart2"]["type"];
$tamano2 = $_FILES["fotoart2"]["size"];
$destino2 = 'spl/' . $nombrefoto2;
move_uploaded_file($archivo2, $destino2);
$archivo3 = $_FILES["fotoart3"]["tmp_name"];
$nombrefoto3 = $_FILES["fotoart3"]["name"];
$tipo3 = $_FILES["fotoart3"]["type"];
$tamano3 = $_FILES["fotoart3"]["size"];
$destino3 = 'spl/' . $nombrefoto3;
move_uploaded_file($archivo3, $destino3);
$archivo4 = $_FILES["fotoart4"]["tmp_name"];
$nombrefoto4 = $_FILES["fotoart4"]["name"];
$tipo4 = $_FILES["fotoart4"]["type"];
$tamano4 = $_FILES["fotoart4"]["size"];
$destino4 = 'spl/' . $nombrefoto4;
move_uploaded_file($archivo4, $destino4);
$archivo5 = $_FILES["fotoart5"]["tmp_name"];
$nombrefoto5 = $_FILES["fotoart5"]["name"];
$tipo5 = $_FILES["fotoart5"]["type"];
$tamano5 = $_FILES["fotoart5"]["size"];
$destino5 = 'spl/' . $nombrefoto5;
move_uploaded_file($archivo5, $destino5);
$archivo6 = $_FILES["fotoart6"]["tmp_name"];
$nombrefoto6 = $_FILES["fotoart6"]["name"];
$tipo6 = $_FILES["fotoart6"]["type"];
$tamano6 = $_FILES["fotoart6"]["size"];
$destino6 = 'spl/' . $nombrefoto6;
move_uploaded_file($archivo6, $destino6);
$archivo7 = $_FILES["fotoart7"]["tmp_name"];
$nombrefoto7 = $_FILES["fotoart7"]["name"];
$tipo7 = $_FILES["fotoart7"]["type"];
$tamano7 = $_FILES["fotoart3"]["size"];
$destino7 = 'spl/' . $nombrefoto7;
move_uploaded_file($archivo7, $destino7);
$archivo8 = $_FILES["fotoart8"]["tmp_name"];
$nombrefoto8 = $_FILES["fotoart8"]["name"];
$tipo8 = $_FILES["fotoart8"]["type"];
$tamano8 = $_FILES["fotoart8"]["size"];
$destino8 = 'spl/' . $nombrefoto8;
move_uploaded_file($archivo8, $destino8);

session_start();
$iduser = $_SESSION['id'];
$tipopublicacion = $_POST["tipopublicacion"];
if ($tipopublicacion == "donativo") {
    $psswd = substr(md5(microtime()), 1, 8);
    $codigodonacion = $psswd;
    $tipopublicacion = true;
} else {
    $tipopublicacion = false;
    $codigodonacion = 0;
}

$insertar = "INSERT INTO `easy`.`spl` (`idspl`, `idusuario`, `nombre`, `facebook`, `pagweb`, `ubicacion`, `categoria`, `telefono`, `horario`, `descripcion`, `foto`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `donativo`, `coddonativo`) VALUES (NULL, '$iduser', '$titulospl', '$fbspl', '$pagweb', '$ubicacionspl', '$categoriaspl', '$telefonospl', '$horariospl', '$descripcionspl', '$destino' , '$destino2' , '$destino3' , '$destino4' , '$destino5' , '$destino6' , '$destino7' , '$destino8' , '$tipopublicacion' , '$codigodonacion')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script>'
    . 'alert("Error al publicar el servicio");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    if ($codigodonacion == 0) {
        echo '<script>'
        . 'alert("Gracias por tu confianza :D tu articulo fue publicado");'
        . '</script>';
        echo "<script>window.history.go(-1);</script>";
    } else {
        echo '<script>'
        . 'alert("Gracias por tu apoyo :D  Aqui esta el codigo de donacion ' . $codigodonacion . '");'
        . '</script>';
        echo "<script>window.history.go(-1);</script>";
    }
}