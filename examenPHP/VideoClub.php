<?php 

class VideoClub {
    private string $nombre;
    private array $productos;
    private int $numProductos;
    private array $socios;
    private int $numSocios;

    public function __construct($nombre, $productos, $numProductos, $socios, $numSocios)
    {
        $this->nombre = $nombre;
        $this->productos = $productos;
        $this->numProductos = $numProductos;
        $this->socios = $socios;
        $this->numSocios = $numSocios;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
 
    public function getProductos()
    {
        return $this->productos;
    }

    public function setProductos($productos)
    {
        $this->productos = $productos;

        return $this;
    }

    public function getNumProductos()
    {
        return $this->numProductos;
    }

    public function setNumProductos($numProductos)
    {
        $this->numProductos = $numProductos;

        return $this;
    }

    public function getSocios()
    {
        return $this->socios;
    }

    public function setSocios($socios)
    {
        $this->socios = $socios;

        return $this;
    }

    public function getNumSocios()
    {
        return $this->numSocios;
    }

    public function setNumSocios($numSocios)
    {
        $this->numSocios = $numSocios;

        return $this;
    }

    public function getPrecioConIVA() : float {  
        return $this->precio + ($this->precio * self::IVA);
    }

    public function muestraResumen() : void {
        echo '<br><br><b>Resumen:</b><br>'.'Título = '.$this->titulo.', Número = '.$this->numero.', Precio = '.$this->precio.', Precio con IVA = '.$this->getPrecioConIVA();
    }
}

?>