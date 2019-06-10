<script src="vistas/sweetalert-master/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../vistas/sweetalert-master/dist/sweetalert.css">
        
<?php

include 'conexion.php';
session_start();
$iduser = $_SESSION['id'];
$idarticulo = $_GET['id'];
$sqlidvendedor1 = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `id`='$idarticulo';");
$sqlidvendedor2 = mysqli_fetch_array($sqlidvendedor1);
$sqlidvendedor3 = $sqlidvendedor2["idvendedor"];

if ($sqlidvendedor3 == $iduser) {
    echo '<script>'
    . 'alert("No puedes darte like a ti mismo ;D");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    $esta = 0;
    $sqlarticulofav = mysqli_query($conexion, "SELECT * FROM `easy`.`liked`");
    while ($resultadof = mysqli_fetch_array($sqlarticulofav)) {

        if ($resultadof['idarticulo'] == $idarticulo && $resultadof['vendedorid'] == $sqlidvendedor3 && $resultadof['likeid'] == $iduser) {
            $esta = 1;
        }
    }
    if ($esta == 1) {
        echo '<script>'
        . 'alert("Ya has agregado este articulo :D");'
        . 'window.history.go(-1);'
        . '</script>';
    } else {
        $insertarlike = "INSERT INTO `liked` (`id`, `idarticulo`, `vendedorid`, `likeid`) VALUES (NULL, '$idarticulo', '$sqlidvendedor3', '$iduser');";
        $resultadolike = mysqli_query($conexion, $insertarlike);
        if (!$resultadolike) {
        echo "<script type='text/javascript'> sweetAlert('Oops...', 'Something went wrong!','error'); </script>";
        echo "<script>window.history.go(-1);</script>";
        } else {
        echo "<script type='text/javascript'> swal('Good job!', 'You clicked the button!', 'success'); </script>";
        echo "<script>window.history.go(-1);</script>";
        }
    }
}
    ?>