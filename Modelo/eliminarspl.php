<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include 'conexion.php';
session_start();
$idspleli = $_GET['spl'];
$eliminararticulos = "DELETE FROM `easy`.`spl` WHERE `idspl`='$idspleli';";
$resultadoarticulos = mysqli_query($conexion, $eliminararticulos);
if (!$resultadoarticulos) {
    echo '<script>'
    . 'alert("Error al eliminar el servicio");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    echo '<script>'
    . "alert('Servicio eliminado');"
    . "location.href='../vistas/user.php#user';</script>";
}
