<?php
class Tranporte extends Tramite{

    private $modelo;
    private $capacidad;
    private $tipoTransporte;
    

    public function __construct($identificacionT, $descripcionT, $costo, $modelo, $capacidad, $tipoTransporte ){
        parent::__construct($identificacionT, $descripcionT, $costo);
        $this-> modelo = $modelo;
        $this-> capacidad = $capacidad;
        $this-> tipoTransporte = $tipoTransporte;     
    }

    public function getModelo(){
        return $this-> modelo;
    }
    public function getCapacidad(){
        return $this-> capacidad;
    }
    public function getTipoTransporte(){
        return $this-> tipoTransporte;
    }
    
    public function setModelo($modelo){
        $this-> modelo = $modelo;
    }
    public function setCapacidad($capacidad){
        $this-> capacidad = $capacidad;
    }
    public function setTipoTransporte($tipoTransporte){
        $this-> tipoTransporte = $tipoTransporte;
    }


    public function __toString()
    {
        return parent::__toString().
               "\n Modelo: ". $this->getModelo().
               "\n Capacidad: ". $this->getCapacidad().
               "\n Tipo de transporte: ". $this->getTipoTransporte();
               
    }

    public function darCostoTramite(){
        $costoTramite = parent::darCostoTramite();
        $modelo = $this->getModelo();
        $capacidad = $this->getCapacidad();

        $total = $costoTramite + (($modelo / 2024) * $capacidad); 
        
        return $total;
    }
}