<?php
class Transito extends Tramite{
    private $numPatente;
    private $marca;
    private $modelo;

    public function __construct($identificacionT, $descripcionT, $costo, $numPatente, $marca, $modelo ){
        parent::__construct($identificacionT, $descripcionT, $costo);
        $this-> numPatente = $numPatente;
        $this-> marca = $marca;
        $this-> modelo = $modelo;
    }

    public function getNumPatente(){
        return $this-> numPatente;
    }
    public function getMarca(){
        return $this-> marca;
    }
    public function getModelo(){
        return $this-> modelo;
    }

    public function setNumPatente($numPatente){
        $this-> numPatente = $numPatente;
    }
    public function setMarca($marca){
        $this-> marca = $marca;
    }
    public function setModelo($modelo){
        $this-> modelo = $modelo;
    }

    public function __toString()
    {
        return parent::__toString().
               "\n Numero de patente: ". $this->getNumPatente().
               "\n Marca: ". $this->getMarca().
               "\n Modelo: ". $this->getModelo();
    }

    public function darCostoTramite(){
        $costoTramite = parent::darCostoTramite();
        $modelo = $this->getModelo();

        $total = $costoTramite + ($modelo / 2024); 
        
        return $total;
    }
}