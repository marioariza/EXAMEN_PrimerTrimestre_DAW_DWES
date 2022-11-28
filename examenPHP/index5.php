<?php
include "Videoclub.php";
include "Cliente.php";
include "Juego.php"; 
include "Disco.php";
include "CintaVideo.php";

$vc = new Videoclub("Severo 8A"); 

//voy a incluir unos cuantos soportes de prueba 
$vc->incluirJuego("God of War", 19.99, "PS4", 1, 1); 
$vc->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
$vc->incluirDvd("Torrente", 4.5, "es","16:9"); 
$vc->incluirDvd("Origen", 4.5, "es,en,fr", "16:9"); 
$vc->incluirDvd("El Imperio Contraataca", 3, "es,en","16:9"); 
$vc->incluirCintaVideo("Los cazafantasmas", 3.5, 107); 
$vc->incluirCintaVideo("El nombre de la Rosa", 1.5, 140); 

//listo los productos 
echo "<br>--------------------------<br>";
$vc->listarProductos(); 

echo "<br>--------------------------<br>";
//voy a crear algunos socios 
$vc->incluirSocio("Amancio Ortega"); 
$vc->incluirSocio("Pablo Picasso", 2); 

echo "<br><br>";
// $cl = new Cliente('Mario', 2);
// $cl->alquilar()->a
$vc->alquilaSocioProducto(1,2)->alquilaSocioProducto(1,3)->alquilaSocioProducto(1,2)->alquilaSocioProducto(1,6); 
echo "<br><br>";
// $vc->alquilaSocioProducto(1,3); 
//alquilo otra vez el soporte 2 al socio 1. 
// no debe dejarme porque ya lo tiene alquilado 
echo "<br><br>";
// $vc->alquilaSocioProducto(1,2); 
//alquilo el soporte 6 al socio 1. 
//no se puede porque el socio 1 tiene 2 alquileres como máximo 
echo "<br><br>";
// $vc->alquilaSocioProducto(1,6); 

echo "<br>--------------------------";
//listo los socios 
echo "<br>";
$vc->listarSocios();
