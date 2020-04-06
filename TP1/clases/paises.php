<?php

include 'mundo.php';


class Paises extends Mundo
{
    private $continente;
    private $region;
    private $idioma;
    private $capital;
    private $paises;

    public function __construct($cont, $reg, $id, $cap){

        $this->continente = $cont;
        $this->region = $reg;
        $this->idioma = $id;
        $this->capital = $cap;
        $this->paises = new Mundo();
        
    }


    public function mostrarCont(){

        $array = $this->paises->traerPorContinente($this->continente);
        foreach ($array as $value) {
            echo '<br>', strval(json_Encode($value));
        }
    }

    public function mostrarCap(){

        $array = $this->paises->traerPorCapital($this->capital);
        foreach ($array as $value) {
            echo '<br>', strval(json_Encode($value));
        }
    }

    public function mostrarId(){

        $array = $this->paises->traerPorIdioma($this->idioma);
        foreach ($array as $value) {
            echo '<br>', strval(json_Encode($value));
        }
    }

    public function mostrarReg(){

        $array = $this->paises->traerPorRegion($this->region);
        foreach ($array as $value) {
            echo '<br>', strval(json_Encode($value));
        }
    }





}
