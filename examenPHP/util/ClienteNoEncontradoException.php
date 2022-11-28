<?php 



class ClienteNoEncontrado extends VideoClubException {

    function ClienteNoEnc() {
        $ve = new VideoClubException();
        $ve->ClienteNoEncontrado();
    }
}