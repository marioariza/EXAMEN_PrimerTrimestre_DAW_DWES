<?php

function __autoload ($nombre_clase) {
    $directorio = $nombre_clase."php";

    if (file_exists($directorio)) {
        include $directorio;    
    } else {
        die ("No existe el archivo ". $nombre_clase);
    }
}