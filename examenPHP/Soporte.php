<?php 

include_once 'VideoClub.php';
abstract class Soporte implements Resumible {
    public string $titulo;
    protected string $numero;
    private float $precio;

    const IVA = 0.21;

    public function __construct($titulo, $numero, $precio)
    {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
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

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getPrecioConIVA() : float {  
        return number_format($this->precio + ($this->precio * self::IVA), 2);
        
    }

    public function muestraResumen() : void {
        echo '<br><br><b>Resumen:</b><br>'.'Título = '.$this->titulo.', Número = '.$this->numero.', Precio = '.$this->precio.', Precio con IVA = '.$this->getPrecioConIVA();
    }
}

?>