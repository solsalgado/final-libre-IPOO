<?php
class Puesto{
    private $identificacion;
    private $descripcion;
    private $arrayTramites = [];

    public function __construct($identificacion, $descripcion, $arrayTramites){
        $this-> identificacion = $identificacion;
        $this-> descripcion = $descripcion;
        $this-> arrayTramites = $arrayTramites;
    }

    public function getIdentificacion(){
        return $this-> identificacion;
    }
    public function getDescripcion(){
        return $this-> descripcion;
    }
    public function getArrayTramites(){
        return $this-> arrayTramites;
    }

    public function setIdentificacion($identificacion){
        $this-> identificacion = $identificacion;
    }
    public function setDescripcion($descripcion){
        $this-> descripcion = $descripcion;
    }
    public function setArrayTramites($arrayTramites){
        $this-> arrayTramites = $arrayTramites;
    }

    public function __toString()
    {
        return "\n Identificacion: ". $this->getIdentificacion().
               "\n Descripcion: ". $this->getDescripcion().
               "\n Tramites: ". $this->mostrarArrayTramite();
    }

    public function mostrarArrayTramite(){
        $arrayT = $this->getArrayTramites();
        $count = count($arrayT);
        $texto = "";
        for ($i=0; $i < $count; $i++) { 
            $texto = $texto. $arrayT[$i];
        }
        return $texto;
    }

    public function darCantidadTramitesEnEspera(){
        $arrayTramites = $this->getArrayTramites();
        $count = count($arrayTramites);

        return $count;
    }

    public function incorporarTramite($unTramite){
        $arrayTramites = $this->getArrayTramites();
        $count = count($arrayTramites);

        for ($i=0; $i < $count; $i++) { 
            $costoTramite = $arrayTramites[$i]->darCostoTramite();           
            array_push($arrayTramites, $unTramite);
            $this->setArrayTramites($arrayTramites);
        }
        return $costoTramite;
    }
}
/*
    public function incorporarTramite($unTramite){
        $arrayTramites = $this->getArrayTramites();
        $count = count($arrayTramites);

        for ($i=0; $i < $count; $i++) { 
            $costoTramite = $arrayTramites[$i]->darCostoTramite();
            if($arrayTramites[$i] instanceof Transito){
                $importe = $costoTramite;
                array_push($arrayTramites, $unTramite);
                $this->setArrayTramites($arrayTramites);
            }
            if($arrayTramites[$i] instanceof Tranporte){
                $importe = $costoTramite;
                array_push($arrayTramites, $unTramite);
            }
            if($arrayTramites[$i] instanceof Comercio){
                $importe = $costoTramite;
                array_push($arrayTramites, $unTramite);
            }
        }
    
*/