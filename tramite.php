<?php
class Tramite{
    private $identificacionT;
    private $descripcionT;
    private $costo;

    public function __construct($identificacionT, $descripcionT, $costo){
        $this-> identificacionT = $identificacionT;
        $this-> descripcionT = $descripcionT;
        $this-> costo = $costo;
    }

    public function getIdentificacionT(){
        return $this-> identificacionT;
    }
    public function getDescripcionT(){
        return $this-> descripcionT;
    }
    public function getCosto(){
        return $this-> costo;
    }

    public function setIdentificacionT($identificacionT){
        $this-> identificacionT = $identificacionT;
    }
    public function setDescripcionT($descripcionT){
        $this-> descripcionT = $descripcionT;
    }
    public function setCosto($costo){
        $this-> costo = $costo;
    }

    public function __toString()
    {
        return "\n Identificacion: ". $this->getIdentificacionT().
               "\n Descripcion: ". $this->getDescripcionT().
               "\n Costo: ". $this->getCosto();
    }

    public function darCostoTramite(){
        $costoT = $this->getCosto();

        return $costoT;
    }
}