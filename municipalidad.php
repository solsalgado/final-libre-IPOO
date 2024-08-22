<?php
class Municipalidad{
    private $arrayPuestos = [];

    public function __construct($arrayPuestos){
        $this-> arrayPuestos = $arrayPuestos;
    }

    public function getArrayPuestos(){
        return $this-> arrayPuestos;
    }

    public function setArrayPuestos($arrayPuestos){
        $this-> arrayPuestos = $arrayPuestos;
    }

    public function __toString()
    {
        return "\n Puestos: ". $this->mostrarArrayPuestos();
    }

    public function mostrarArrayPuestos(){
        $arrayP = $this->getArrayPuestos();
        $count = count($arrayP);
        $texto = "";
        for ($i=0; $i < $count; $i++) { 
            $texto = $texto. $arrayP[$i];
        }
        return $texto;
    }

    public function asignarPuestoAtencion($objTram){
        $arrayPuesto = $this->getArrayPuestos();
        $count = count($arrayPuesto);
        $maximo = 5; //suponiendo que en cada puesto se atiende un max de 5 tramites
        $arrayPuestoAtencion = [];

        for ($i=0; $i < $count; $i++) { 
            $arrayT = $arrayPuesto[$i]->getArrayTramites();
            $count2 =count($arrayT);

            for ($j=0; $j < $count2; $j++) { 
                if($count2 < $maximo){
                    $maximo = $count2;
                    $arrayPuestoAtencion = ["elPuesto" => $arrayPuesto[$i]->getDescripcion(), 
                                            "elImporte" => $arrayPuesto[$j]->incorporarTramite($objTram)];
                }
            }
        }
        return $arrayPuestoAtencion;
    }
}