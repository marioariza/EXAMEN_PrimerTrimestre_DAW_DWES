<?php 

include_once 'Soporte.php';

class Disco extends Soporte {
    public string $idiomas;
    private string $formatPantalla;

    public function __construct($titulo, $numero, $precio, $idiomas, $formatPantalla)
    {
        parent::__construct($titulo, $numero, $precio);  
        $this->idiomas = $idiomas;
        $this->formatPantalla = $formatPantalla;
    }

    public function getIdiomas()
    {
        return $this->idiomas;
    }

    public function setIdiomas($idiomas)
    {
        $this->idiomas = $idiomas;

        return $this;
    }

    public function getFormatPantalla()
    {
        return $this->formatPantalla;
    }

    public function setFormatPantalla($formatPantalla)
    {
        $this->formatPantalla = $formatPantalla;

        return $this;
    }

    public function muestraResumen() : void {
        echo '<br><br><b>Resumen:</b><br>'.'Título = '.$this->getTitulo().', Número = '.$this->getNumero().', Precio = '.$this->getPrecio().', Precio con IVA = '.$this->getPrecioConIVA().', Idiomas = '.$this->idiomas.', Formato pantalla = '.$this->formatPantalla;
    }
}

?>