<?php

include 'conexion.php';
$titulo = $_POST["titulo"];
$precio = $_POST["precio"];
@$categoria = $_POST["categoria"];
$zona = $_POST["zona"];
$descripcion = $_POST["descripcion"];
@$estado = $_POST["estado"];
@$envio = $_POST["envio"];
@$existencias = $_POST["existencias"];
@$archivo = $_FILES["fotoart"]["tmp_name"];
@$nombrefoto = $_FILES["fotoart"]["name"];
@$tipo = $_FILES["fotoart"]["type"];
@$tamano = $_FILES["fotoart"]["size"];
@$destino = 'articulo/' . @$nombrefoto;
move_uploaded_file(@$archivo, @$destino);
@$archivo2 = $_FILES["fotoart2"]["tmp_name"];
@$nombrefoto2 = $_FILES["fotoart2"]["name"];
@$tipo2 = $_FILES["fotoart2"]["type"];
@$tamano2 = $_FILES["fotoart2"]["size"];
@$destino2 = 'articulo/' . @$nombrefoto2;
move_uploaded_file($archivo2, $destino2);
$archivo3 = $_FILES["fotoart3"]["tmp_name"];
$nombrefoto3 = $_FILES["fotoart3"]["name"];
$tipo3 = $_FILES["fotoart3"]["type"];
$tamano3 = $_FILES["fotoart3"]["size"];
$destino3 = 'articulo/' . $nombrefoto3;
move_uploaded_file($archivo3, $destino3);
$archivo4 = $_FILES["fotoart4"]["tmp_name"];
$nombrefoto4 = $_FILES["fotoart4"]["name"];
$tipo4 = $_FILES["fotoart4"]["type"];
$tamano4 = $_FILES["fotoart4"]["size"];
$destino4 = 'articulo/' . $nombrefoto4;
move_uploaded_file($archivo4, $destino4);
$archivo5 = $_FILES["fotoart5"]["tmp_name"];
$nombrefoto5 = $_FILES["fotoart5"]["name"];
$tipo5 = $_FILES["fotoart5"]["type"];
$tamano5 = $_FILES["fotoart5"]["size"];
$destino5 = 'articulo/' . $nombrefoto5;
move_uploaded_file($archivo5, $destino5);
$archivo6 = $_FILES["fotoart6"]["tmp_name"];
$nombrefoto6 = $_FILES["fotoart6"]["name"];
$tipo6 = $_FILES["fotoart6"]["type"];
$tamano6 = $_FILES["fotoart6"]["size"];
$destino6 = 'articulo/' . $nombrefoto6;
move_uploaded_file($archivo6, $destino6);
$archivo7 = $_FILES["fotoart7"]["tmp_name"];
$nombrefoto7 = $_FILES["fotoart7"]["name"];
$tipo7 = $_FILES["fotoart7"]["type"];
$tamano7 = $_FILES["fotoart7"]["size"];
$destino7 = 'articulo/' . $nombrefoto7;
move_uploaded_file($archivo7, $destino7);
$archivo8 = $_FILES["fotoart8"]["tmp_name"];
$nombrefoto8 = $_FILES["fotoart8"]["name"];
$tipo8 = $_FILES["fotoart8"]["type"];
$tamano8 = $_FILES["fotoart8"]["size"];
$destino8 = 'articulo/' . $nombrefoto8;
move_uploaded_file($archivo8, $destino8);
$FecHr = date('Y/m/d H:i');


$tipopublicacion = $_POST["tipopublicacion"];
$calidad = $_POST["calidad"];
session_start();
$iduser = $_SESSION['id'];
if ($tipopublicacion == "donativo") {
    $psswd = substr(md5(microtime()), 1, 8);
    $codigodonacion = $psswd;
    $tipopublicacion = true;
} else {
    $tipopublicacion = false;
    $codigodonacion = 0;
}
if ($calidad == "nuevo") {
    $calidad = true;
} else {
    $calidad = false;
}
$cate;

if (@$categoria == "Desktop") {
    $cate = "Desktop";
}
if (@$categoria == "Gamer") {
    $cate = "Desktop";
}
if (@$categoria == "Servidor") {
    $cate = "Desktop";
}
if (@$categoria == "Laptop HP") {
    $cate = "Portatiles";
}
if (@$categoria == "Laptop Dell") {
    $cate = "Portatiles";
}
if (@$categoria == "Laptop Toshiba") {
    $cate = "Portatiles";
}
if (@$categoria == "Laptop Apple") {
    $cate = "Portatiles";
}
if (@$categoria == "Monitores") {
    $cate = "ArmatuPC";
}
if (@$categoria == "Desktop") {
    $cate = "ArmatuPC";
}
if (@$categoria == "Procesadores") {
    $cate = "ArmatuPC";
}
if (@$categoria == "Caja/Case") {
    $cate = "ArmatuPC";
}
if (@$categoria == "Memoria RAM") {
    $cate = "ArmatuPC";
}
if (@$categoria == "Targeta de video") {
    $cate = "ArmatuPC";
}
if (@$categoria == "Discos Duros") {
    $cate = "ArmatuPC";
}
if (@$categoria == "Targeta madre") {
    $cate = "ArmatuPC";
}
if (@$categoria == "Ipad") {
    $cate = "Tablets/celulares";
}
if (@$categoria == "Tablets") {
    $cate = "Tablets/celulares";
}
if (@$categoria == "Iphone") {
    $cate = "Tablets/celulares";
}
if (@$categoria == "Nokia") {
    $cate = "Tablets/celulares";
}
if (@$categoria == "Samsung") {
    $cate = "Tablets/celulares";
}
if (@$categoria == "Otros Celulares") {
    $cate = "Tablets/celulares";
}
if (@$categoria == "Accesorio para celulares") {
    $cate = "Tablets/celulares";
}
if (@$categoria == "Impresora EPSON") {
    $cate = "impresoras";
}
if (@$categoria == "Impresora HP") {
    $cate = "impresoras";
}
if (@$categoria == "Impresora Brother") {
    $cate = "impresoras";
}
if (@$categoria == "Impresora Canon") {
    $cate = "impresoras";
}
if (@$categoria == "Impresora Xerox") {
    $cate = "impresoras";
}
if (@$categoria == "Impresora Samsung") {
    $cate = "impresoras";
}
if (@$categoria == "Cartuchos originales") {
    $cate = "impresoras";
}
if (@$categoria == "Cartuchos genericos") {
    $cate = "impresoras";
}
if (@$categoria == "Parlantes") {
    $cate = "Accesorios";
}
if (@$categoria == "Teclado") {
    $cate = "Accesorios";
}
if (@$categoria == "Mouse") {
    $cate = "Accesorios";
}
if (@$categoria == "Headsets/Auriculares") {
    $cate = "Accesorios";
}

if (@$categoria == "Baterias") {
    $cate = "Accesorios";
}
if (@$categoria == "Fundas, maletines y estuches") {
    $cate = "Accesorios";
}
if (@$categoria == "Cargadores") {
    $cate = "Accesorios";
}
if (@$categoria == "Memorias") {
    $cate = "Accesorios";
}


$activo = "YES";

$insertar = "INSERT INTO `easy`.`sell` (`id`, `idvendedor`, `titulo`, `precio`, `categoria`, `cate`, `zona`, `descripcion`,`fecha`, `fotoart`, `fotoart2`, `fotoart3`, `fotoart4`, `calidad`, `estado`, `envio`, `donativo`, `coddonativo`, `existencias`, `activo`) VALUES (NULL, '$iduser', '$titulo', '$precio', '$categoria', '$cate', '$zona', '$descripcion', '$FecHr', '$destino' , '$destino2' , '$destino3' , '$destino4' , '$calidad', '$estado', '$envio', '$tipopublicacion', '$codigodonacion', '$existencias', '$activo')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script>'
    . 'alert("Error al publicar el servicio");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    if ($codigodonacion == 0) {
         header("Location: ../vista/user.php");
    } else {
        echo '<script>'
        . 'alert("Gracias por tu apoyo :D  Aqui esta el codigo de donacion ' . $codigodonacion . '");'
        . '</script>';
                 header("Location: ../vista/user.php");

    }
}