<?php 

include 'util/SoporteYaAlquiladoException.php';
include 'util/CupoSuperadoException.php';

class Cliente {
    public string $nombre;
    private int $numero;
    private array $soportesAlquilados = [];

    private int $numSoportesAlquilados = 0;

    private int $maxAlquilerConcurrente;

    public function __construct($nombre, $numero)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = 3;
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

        if (in_array($s, $this->soportesAlquilados)) {
            return true;
        } else {
            return false;
        }
    }

    public function alquilar(Soporte $s) {

        if ($this->tieneAlquilado($s) == true) {
            $error = new SoporteYaAlquilado;
            $error->YaAlquilado();
        } else if ($this->tieneAlquilado($s) == false && $this->getNumSoportesAlquilados() >= 3) {
            $error = new CupoSuperado;
            $error->CupoSup();
        } else if ($this->tieneAlquilado($s) == false && $this->getNumSoportesAlquilados() < 3) {
            $this->numSoportesAlquilados++;
            echo "Alquiler realizado. Número de alquileres: ".$this->numSoportesAlquilados. "<br><br>";
            array_push($this->soportesAlquilados, $s);
        }

        return $this;

    }

    public function devolver (int $numSoporte) {
        $alquilado = false;

        if($this->numSoportesAlquilados > 0) {
            
            foreach ($this->soportesAlquilados as $sop) {
                if($sop->getNumero() == $numSoporte) {
                    echo "El soporte ".$numSoporte." ha sido devuelto correctamente. <br><br>";
                    $soporte_eliminar = ($sop->getNumero() === $numSoporte);
                    unset($this->soportesAlquilados[$soporte_eliminar]);
                    $this->numSoportesAlquilados--;
                    $alquilado=true;
                    break;
                }
            }
            
            if(!$alquilado)
            echo "El cliente no tiene alquilado el soporte ".$numSoporte. "<br><br>";
        } else {
            echo "El cliente no tiene soportes alquilados. <br><br>";
        }

        return $this;
    }

    public function listarAlquileres() : void {  
        echo "<b>Listado alquileres:</b>";
        echo "<br><br>";
        echo "El cliente tiene alquilado ".$this->numSoportesAlquilados. " soportes:";
        echo "<br><br>";
        foreach ($this->soportesAlquilados as $sp) {
            echo "- ".$sp->getTitulo()." - N: ".$sp->getNumero()."<br>";
            echo "<br>";
        }

    }

    public function muestraResumen() {
        echo '<br><b>Resumen:</b><br>'.'Nombre = '.$this->nombre.', Número = '.$this->numero.', Número soportes alquilados = '.$this->numSoportesAlquilados;
    }
}

?>