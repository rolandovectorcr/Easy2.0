<?php

if(preg_match('/iphone/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%iphone%' ";                                  
}
if(preg_match('/celular/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%celular%' ";                                 
}
if(preg_match('/casa/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%casa%' ";                                 
}
if(preg_match('/mueble/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%mueble%' ";                         
}
if(preg_match('/computadora/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%computadora%' ";                            
}
if(preg_match('/finca/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%finca%' ";                            
}
if(preg_match('/telefono/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%telefono%' ";                       
}
if(preg_match('/carro/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%carro%' ";                                 
}
if(preg_match('/automovil/', $busqueda)) {
    $sentenciabusqueda.=" OR `titulo` LIKE '%automovil%' ";                                
}

?>