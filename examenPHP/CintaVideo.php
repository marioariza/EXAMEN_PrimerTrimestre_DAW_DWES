<?php 

include "CintaVideo.php";

class CintaVideo extends Soporte {
    private int $duracion;

    public function __construct($titulo, $numero, $precio, $duracion)
    {
        parent::__construct($titulo, $numero, $precio);  
        $this->duracion = $duracion;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    public function muestraResumen() : void {
        echo '<br><br><b>Resumen:</b><br>'.'Título = '.$this->getTitulo().', Número = '.$this->getNumero().', Precio = '.$this->getPrecio().', Precio con IVA = '.$this->getPrecioConIVA().', Duración = '.$this->duracion;
    }
}

?>