<?php 

include 'VideoClubException.php';

class SoporteYaAlquilado extends VideoClubException {

    function YaAlquilado () {
        $ve = new VideoClubException();
        $ve->SoporteYaAlquilado();
    }
}