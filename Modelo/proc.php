<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'conexion.php';

        $q = $_POST[q];
        $con = conexion();

        $sql = "select * from personas where nombre LIKE '" . $q . "%'";
        $res = mysql_query($sql, $con);

        if (mysql_num_rows($res) == 0) {

            echo '<b>No hay sugerencias</b>';
        } else {

            echo '<b>Sugerencias:</b><br />';

            while ($fila = mysql_fetch_array($res)) {

                echo $fila['nombre'] . '<br />';
            }
        }
        ?>
    </body>
</html>
