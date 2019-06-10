<?php

if(preg_match('/heredia/', $busquedazona)) {
    $sentenciabusqueda.=" OR `zona` LIKE '%heredia%' ";                                  
}
if(preg_match('/san jose/', $busquedazona)) {
    $sentenciabusqueda.=" OR `zona` LIKE '%san jose%' ";                                  
}
if(preg_match('/cartago/', $busquedazona)) {
    $sentenciabusqueda.=" OR `zona` LIKE '%cartago%' ";                                  
}
if(preg_match('/alajuela/', $busquedazona)) {
    $sentenciabusqueda.=" OR `zona` LIKE '%alajuela%' ";                                  
}
if(preg_match('/puntarenas/', $busquedazona)) {
    $sentenciabusqueda.=" OR `zona` LIKE '%puntarenas%' ";                                  
}
if(preg_match('/limon/', $busquedazona)) {
    $sentenciabusqueda.=" OR `zona` LIKE '%limon%' ";                                  
}
if(preg_match('/guanacaste/', $busquedazona)) {
    $sentenciabusqueda.=" OR `zona` LIKE '%guanacaste%' ";                                  
}

?>