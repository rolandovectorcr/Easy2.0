                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <?php

include 'conexion.php';

$idarticulo = $_POST["idarticulo"];
$idanunciante = $_POST["idanunciante"];
$idcomentante = $_POST["idcomentante"];
$nombre = $_POST["nombre"];
$numero = $_POST["numero"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaj"];
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
$fotocomentante = $_POST["fotocomentante"];

$insertar = "INSERT INTO `easy`.`mensaje` (`id`, `idarticulo`, `idanunciante`, `idcomentante`, `nombre`, `mensaje`, `telefono`,`fecha`,`color`,`correo`,`imgmensaje`) "
        . "VALUES (NULL, '$idarticulo', '$idanunciante', '$idcomentante', '$nombre', '$mensaje', '$numero', '$FecHr', '$colorido', '$correo', '$fotocomentante')";
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