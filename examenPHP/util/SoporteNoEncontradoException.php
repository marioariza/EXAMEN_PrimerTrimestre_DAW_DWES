<?php 



class SoporteNoEncontrado extends VideoClubException {

    function SoporteNoEnc () {
        $ve = new VideoClubException();
        $ve->SoporteNoEncontrado();
    }
}