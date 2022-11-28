<?php 

class VideoClubException extends Exception{

    function ClienteNoEncontrado () {
        echo 'No existe ese socio.<br><br>';
    }

    function CupoSuperado () {
        echo 'Este soporte no está alquilado pero no lo puedes alquilar ya que el número de soportes alquilados a llegado a su tope.<br><br>';
    }

    function SoporteNoEncontrado () {
        echo 'No existe ese soporte.<br><br>';
    }

    function SoporteYaAlquilado () {   
        echo 'Este soporte ya está alquilado.<br><br>';
    }

}
