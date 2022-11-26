<?php

include "Cliente.php";
include "Soporte.php";
include "CintaVideo.php";
include "Juego.php";
include "Disco.php";

//instanciamos un par de objetos cliente

$cliente1 = new Cliente("Bruce Wayne", 23);
$cliente2 = new Cliente("Clark Kent", 33);

//mostramos el número de cada cliente creado 
echo "<br>El identificador del cliente 1 es: " . $cliente1->getNumero();
echo "<br>El identificador del cliente 2 es: " . $cliente2->getNumero();
//instancio algunos soportes 
$soporte1 = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
$soporte2 = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);  
$soporte3 = new Disco("Origen", 24, 15, "es,en,fr", "16:9");
$soporte4 = new Disco("El Imperio Contraataca", 4, 3, "es,en","16:9");

//alquilo algunos soportes
echo "<br><br>";
$cliente1->alquilar($soporte1);
echo "<br><br>";
$cliente1->alquilar($soporte2);
echo "<br><br>";
$cliente1->alquilar($soporte3);

//voy a intentar alquilar de nuevo un soporte que ya tiene alquilado
echo "<br><br>";
$cliente1->alquilar($soporte1);
//el cliente tiene 3 soportes en alquiler como máximo
//este soporte no lo va a poder alquilar
echo "<br><br>";
$cliente1->alquilar($soporte4);
//este soporte no lo tiene alquilado
echo "<br><br>";
$cliente1->devolver(4);
//devuelvo un soporte que sí que tiene alquilado
echo "<br><br>";
$cliente1->devolver(26);
//alquilo otro soporte
echo "<br><br>";
$cliente1->alquilar($soporte4);
//listo los elementos alquilados
echo "<br><br>";
$cliente1->listarAlquileres();
//este cliente no tiene alquileres
echo "<br>";
$cliente2->devolver(2);