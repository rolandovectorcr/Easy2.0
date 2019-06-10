<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$psswd = substr( md5(microtime()), 1, 8);
echo $psswd;
?>