<?php 

class VideoClub {
    private string $nombre;
    private array $productos;
    private int $numProductos;
    private array $socios;
    private int $numSocios;

    function __construct($nombre){ 
        $this->nombre=$nombre; 
        $this->productos=array(); 
        $this->numProductos=0; 
        $this->socios=array(); 
        $this->numSocios=0; 
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

    private function incluir_producto($nuevo_producto){ 
        $this->productos[$this->numProductos]=$nuevo_producto; 
        echo "<p>Incluido soporte " . $this->numProductos; 
        $this->numProductos++; 
    }

    public function incluirCintaVideo (string $titulo, float $precio, int $duracion) {  
        $cinta_video_nueva = new CintaVideo($titulo, $this->numProductos, $precio, $duracion); 
        $this->incluir_producto($cinta_video_nueva); 
    }

    public function incluirDvd (string $titulo, float $precio, string $idiomas, string $pantalla) {  
        $dvd_nuevo = new Disco($titulo, $this->numProductos, $precio, $idiomas, $pantalla); 
        $this->incluir_producto($dvd_nuevo); 
    }

    public function incluirJuego (string $titulo, float $precio, string $consola, int $minJ, int $maxJ) {  
        $juego_nuevo = new Juego($titulo, $this->numProductos, $precio, $consola, $minJ, $maxJ); 
        $this->incluir_producto($juego_nuevo); 
    }

    public function incluirSocio (string $nombre, int $maxAlquileresConcurrentes = 3) {  
        $socio_nuevo = new Cliente($nombre,$this->numSocios,$maxAlquileresConcurrentes); 
        $this->socios[$this->numSocios]=$socio_nuevo; 
        echo "<p>Incluido socio " . $this->numSocios; 
        $this->numSocios++; 
    }

    public function listarProductos(){ 
        echo "<p>Listado de los " . $this->numProductos . " productos disponibles:"; 
        for ($i=0;$i<$this->numProductos;$i++){ 
           echo "<p>"; 
           $this->productos[$i]->imprime_caracteristicas(); 
        } 
    } 
     
    public function listarSocios(){ 
        echo "<p>Listado de $this->numSocios socios del videoclub:"; 
        for ($i=0;$i<$this->numSocios;$i++){ 
           echo "<p>"; 
           $this->socios[$i]->imprime_caracteristicas(); 
        } 
    }

    public function alquilaSocioProducto ($numero_socio,$numero_producto){ 
        if (is_null($this->socios[$numero_socio])){ 
           echo "<p>No existe ese socio"; 
        }elseif(is_null($this->productos[$numero_producto])){ 
           echo "<p>No existe ese soporte"; 
        }else{ 
           $this->socios[$numero_socio]->alquila($this->productos[$numero_producto]); 
        } 
    }
}

?>