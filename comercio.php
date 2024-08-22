<?php
class Comercio extends Tramite{

    private $rubro;


    public function __construct($identificacionT, $descripcionT, $costo, $rubro){
        parent::__construct($identificacionT, $descripcionT, $costo);
        $this-> rubro = $rubro;
    }

    public function getRubro(){
        return $this-> rubro;
    }

    public function setRubro($rubro){
        $this-> rubro = $rubro;
    }

    public function __toString()
    {
        return parent::__toString().
               "\n Rubro: ". $this->getRubro();
    }

    public function darCostoTramite(){
        
        $costoTramite = parent::darCostoTramite();
        $rubroC = $this->getRubro();

        if($rubroC == "indumentaria"){
            $total = $costoTramite + 1730;
        }
        if ($rubroC == "comestibles") {
            $total = $costoTramite + 1250;
        }
        if ($rubroC == "repuestos") {
            $total = $costoTramite + 1900;
        }

        return $total;
    }
}