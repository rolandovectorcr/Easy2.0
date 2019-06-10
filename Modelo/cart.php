<script src="vistas/sweetalert-master/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../vistas/sweetalert-master/dist/sweetalert.css">
        
<?php

include 'conexion.php';
session_start();
$iduser = $_SESSION['id'];
$idarticulo = $_GET['cart'];
    $esta = 0;
    $sqlarticulofav = mysqli_query($conexion, "SELECT * FROM `easy`.`cart`");
    while ($resultadof = mysqli_fetch_array($sqlarticulofav)) {

        if ($resultadof['id'] == $idarticulo && $resultadof['idbuyer'] == $iduser) {
            $esta = 1;
        }
    }
    if ($esta == 1) {
        echo '<script>'
        . 'alert("Ya has agregado este articulo :D");'
        . 'window.history.go(-1);'
        . '</script>';
    } else {
        $insertarlike = "INSERT INTO `cart` (`id`, `iditem`, `idbuyer`) VALUES (NULL, '$idarticulo', '$iduser');";
        $resultadolike = mysqli_query($conexion, $insertarlike);
        if (!$resultadolike) {
        echo "<script type='text/javascript'> sweetAlert('Oops...', 'Something went wrong!','error'); </script>";
        echo "<script>window.history.go(-1);</script>";
        } else {
        echo "<script type='text/javascript'> swal('Good job!', 'You clicked the button!', 'success'); </script>";
        echo "<script>window.history.go(-1);</script>";
        }
    }

    ?>