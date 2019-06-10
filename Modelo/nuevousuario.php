
<?php

include 'conexion.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

$archivo = $_FILES["foto"]["tmp_name"];
$nombrefoto = $_FILES["foto"]["name"];
$tipo = $_FILES["foto"]["type"];
$tamano = $_FILES["foto"]["size"];

$destino = 'perfil/' . $nombrefoto;

move_uploaded_file($archivo, $destino);

$claveencriptada = password_hash($clave, PASSWORD_DEFAULT);

$insertar = "INSERT INTO `easy`.`user` (`id`, `nombre`, `apellido`, `email`, `pass`, `telefono`, `foto`) VALUES (NULL, '$nombre', '$apellido', '$correo', '$claveencriptada', '$telefono', '$destino')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `email`='$correo';");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>'
    . 'swal("Este correo ya esta registrado");'
    . 'window.history.go(-1);'
    . '</script>';
    exit;
}

$verificar_telefono = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `telefono`='$telefono';");
if (mysqli_num_rows($verificar_telefono) > 0) {
    echo '<script>'
    . 'alert("Este numero ya esta registrado");'
    . 'window.history.go(-1);'
    . '</script>';
    exit;
}


$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script>'
    . 'swal("Error al crear el perfil!");'
    . 'window.history.go(-1);'
    . '</script>';
} else {
    mysqli_close($conexion);
    include './infosesion.php';
    header("Location: ../vista/user.php");    
}

