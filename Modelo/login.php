<?php

include('conexion.php');
if(isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['pass']) && !empty($_POST['pass'])){
    $correo= $_POST['email'];
    $clave = $_POST['pass'];
    $sql=mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `email`='$correo';");
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `email`='$correo';");
    if(mysqli_num_rows($verificar_correo)==0){
    echo '<script>'
    . 'alert("Este correo no esta registrado");'
            . 'window.history.go(-1);'
            . '</script>';
    exit;
    }else{
        $user=mysqli_fetch_array($sql);
        $hash=$user['pass'];
        if(password_verify($clave, $hash)){
            include './infosesion.php';
            header("Location:../vista/user.php");
        }  else {
            echo '<script>'
            . 'alert("Clave incorrecta");'
            . 'window.history.go(-1);'
            . '</script>';
            exit;
        }
    }
    
    }else {
     echo '<script>alert("No llenaste bien los datos")</script> ';
     echo "<script>location.href='../index.php#login'</script>";        
}
