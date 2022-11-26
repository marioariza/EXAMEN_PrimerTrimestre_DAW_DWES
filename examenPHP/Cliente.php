<?php 

include "Soporte.php";

class Cliente {
    public string $nombre;
    private int $numero;
    private array $soportesAlquilados;

    private int $numSoportesAlquilados;

    private int $maxAlquilerConcurrente;

    public function __construct($nombre, $numero, $maxAlquilerConcurrente = 3)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        self::$maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }
 
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNumSoportesAlquilados()
    {
        return $this->numSoportesAlquilados;
    }

    public function tieneAlquilado(Soporte $s) {

        foreach($this->soportesAlquilados as $sop_alq) {
            if (in_array($sop_alq->numero, $this->soportesAlquilados) == $s->getNumero()) {
                return true;
            } else {
                return false;
            }
        }

    }

    public function alquilar(Soporte $s) {

        if ($this->tieneAlquilado($s) == true) {
            echo "Hola";
        } else {
            echo "Heeeola";
        }

    }

    public function devolver (int $numSoporte) : bool {

    }

    public function listarAlquileres() : void {  

        $alquiler = [];

        for ($i = 0; $i < count($this->soportesAlquilados); $i++) {
            $alquiler[$i] = $this->soportesAlquilados;
            echo $alquiler[$i];
        }
        echo $alquiler[$i];
    }

    public function muestraResumen() : void {
        echo '<br><br><b>Resumen:</b><br>'.'Título = '.$this->titulo.', Número = '.$this->numero.', Precio = '.$this->precio.', Precio con IVA = '.$this->getPrecioConIVA();
    }
}

?>