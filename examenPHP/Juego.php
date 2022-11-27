<?php 

include_once 'Soporte.php';

class Juego extends Soporte {
    public string $consola;

    private int $minNumJugadores;

    private int $maxNumJugadores;

    public function __construct($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores)
    {
        parent::__construct($titulo, $numero, $precio);  
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }

    public function getConsola()
    {
        return $this->consola;
    }

    public function setConsola($consola)
    {
        $this->consola = $consola;

        return $this;
    }

    public function getMinNumJugadores()
    {
        return $this->minNumJugadores;
    }

    public function setMinNumJugadores($minNumJugadores)
    {
        $this->minNumJugadores = $minNumJugadores;

        return $this;
    }

    public function getMaxNumJugadores()
    {
        return $this->maxNumJugadores;
    }

    public function setMaxNumJugadores($maxNumJugadores)
    {
        $this->consola = $maxNumJugadores;

        return $this;
    }

    public function muestraJugadoresPosibles() : string {  
        if ($this->minNumJugadores == 1 && $this->maxNumJugadores == 1) {
            return 'Juego para un jugador.';
        } else if ($this->minNumJugadores > 1 && $this->maxNumJugadores > 1 && $this->minNumJugadores == $this->maxNumJugadores) {
            return 'Juego para '.$this->minNumJugadores.' jugadores.';
        } else {
            return 'Juego de '.$this->minNumJugadores. ' a '.$this->maxNumJugadores.' jugadores.';
        }
    }

    public function muestraResumen() : void {
        echo '<br><br><b>Resumen:</b><br>'.'Título = '.$this->getTitulo().', Número = '.$this->getNumero().', Precio = '.$this->getPrecio().', Precio con IVA = '.$this->getPrecioConIVA().', Consola = '.$this->consola.', Número mínimo jugadores = '.$this->minNumJugadores.', Número máximo jugadores = '.$this->maxNumJugadores;
    }
}

?>