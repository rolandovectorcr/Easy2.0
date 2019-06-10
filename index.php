<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Vista/Css/boot/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>    
        <link rel="stylesheet" href="Vista/Css/Estilo.css">
        <link rel="stylesheet" href="Vista/Css/fontello.css">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <title><?php
        session_start();        
        if ($_SESSION) {
            echo $_SESSION['nombre'];
            ?> <?php
            echo $_SESSION['apellido'];
        } else {
            echo'Magnus';
        }
        ?></title>
    </head>
    <body> 
        <?php include("vista/front.php"); ?>
        <?php include("vista/nav.php"); ?> 
        <?php include("vista/info.php"); ?> 
        <?php include("vista/computer.php"); ?> 
        <?php include("vista/artis.php"); ?>
        <?php include("vista/prices.php"); ?>
        <?php include("vista/footer.php"); ?>
        <?php include("vista/login.php"); ?>
        
    </body>
</html>
