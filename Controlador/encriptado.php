<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

function encriptar($clave){
   $clave_md5 = md5("Hola undo");
   
   echo '$clave' . $clave;
   echo 'encriptado' . $clave_md5;
}



?>