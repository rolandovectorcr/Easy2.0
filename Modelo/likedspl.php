<?php

include 'conexion.php';
session_start();
$iduser = $_SESSION['id'];
$idspl = $_GET['id'];
$sqlidvendedor1 = mysqli_query($conexion, "SELECT * FROM `easy`.`spl` WHERE `idspl`='$idspl';");
$sqlidvendedor2 = mysqli_fetch_array($sqlidvendedor1);
$sqlidvendedor3 = $sqlidvendedor2["idusuario"];

if ($sqlidvendedor3 == $iduser) {
    echo '<script>'
    . 'alert("No puedes darte like a ti mismo ;D");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    $esta = 0;
    $sqlsplfav = mysqli_query($conexion, "SELECT * FROM `easy`.`likedspl`");
    while ($resultadof = mysqli_fetch_array($sqlsplfav)) {

        if ($resultadof['idspl'] == $idspl && $resultadof['publicadorid'] == $sqlidvendedor3 && $resultadof['likedsplid'] == $iduser) {
            $esta = 1;
        }
    }
    if ($esta == 1) {
        echo '<script>'
        . 'alert("Ya has agregado este servicio profesional :D");'
        . 'window.history.go(-1);'
        . '</script>';
    } else {
        $insertarlike = "INSERT INTO `likedspl` (`id`, `idspl`, `publicadorid`, `likedsplid`) VALUES (NULL, '$idspl', '$sqlidvendedor3', '$iduser');";
        $resultadolike = mysqli_query($conexion, $insertarlike);
        if (!$resultadolike) {
        echo '<script>'
        . 'alert("Error al darle like, lo siento");'
        . 'window.history.go(-1);'
        . '</script>';
        echo "<script>window.history.go(-1);</script>";
        } else {
        echo "<script>window.history.go(-1);</script>";
        }
    }
}
    ?>