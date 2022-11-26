<?php 

class Cliente{
    public string $nombre;
    private int $numero;
    private array $soportesAlquilados = [];

    private int $numSoportesAlquilados = 0;

    private int $maxAlquilerConcurrente  = 3;

    public function __construct($nombre, $numero)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
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
            echo "Este soporte ya está alquilado.";
        } else if ($this->tieneAlquilado($s) == false && $this->getNumSoportesAlquilados() >= 3) {
            echo "Este soporte no está alquilado pero no lo puedes alquilar ya que el número de soportes alquilados a llegado a su tope.";
        } else if ($this->tieneAlquilado($s) == false && $this->getNumSoportesAlquilados() < 3) {
            $this->numSoportesAlquilados++;
            echo "Alquiler realizado. Número de alquileres: ".$this->numSoportesAlquilados;
            array_push($this->soportesAlquilados, $s);
        }

    }

    public function devolver (int $numSoporte) {
        $alquilado = false;

        if($this->numSoportesAlquilados > 0) {
            
            foreach ($this->soportesAlquilados as $sop) {
                if($sop->getNumero() == $numSoporte) {
                    echo "Soporte devuelto correctamente: ".$numSoporte;
                    $soporte_eliminar = ($sop->getNumero() === $numSoporte);
                    unset($this->soportesAlquilados[$soporte_eliminar]);
                    $this->numSoportesAlquilados--;
                    $alquilado=true;
                    break;
                }
            }
            
            if(!$alquilado)
            echo "El cliente no tiene alquilado el soporte ".$numSoporte;
        } else {
            echo "El cliente no tiene soportes alquilados.";
        }
    }

    public function listarAlquileres() : void {  
        echo "<b>Listado alquileres:</b>";
        echo "<br><br>";
        echo "El cliente tiene alquilado ".$this->numSoportesAlquilados. " soportes.";
        echo "<br><br>";
        foreach ($this->soportesAlquilados as $sp) {
            echo $sp->getTitulo()."<br>";
            echo $sp->getNumero()."<br>";
            echo $sp->getPrecio()."<br>";
            echo "<br>";
        }

    }

    public function muestraResumen() : void {
        echo '<br><br><b>Resumen:</b><br>'.'Nombre = '.$this->nombre.', Número = '.$this->numero.', Número soportes alquilados = '.$this->numSoportesAlquilados;
    }
}

?>