<?php

require_once __DIR__ .'/../composer/vendor/autoload.php';
include './interfaces/IFunciones.php';
use NNV\RestCountries;


class Mundo implements IFunciones
{
    public $mundo;

    public function __construct(){

        $this->mundo = new RestCountries;
    }
    

// TODAS LAS FUNCIONES TRAEN UN LISTADO DE PAISES CON TODOS SUS DETALLES.
// LAS LINEAS COMENTADAS DEVUELVEN LA LISTA DE PAISES PERO SOLO CON SUS NOMBRES.


    public function traerTodos(){
        
        return $this->mundo->all();
       // return $this->mundo->fields(['name'])->all();
    }

    public function traerPorContinente($cont){

        return $this->mundo->byRegion($cont);
      //  return $this->mundo->fields(['name'])->byRegion($cont);
    }

    public function traerPorIdioma($idioma){
    
        return $this->mundo->byLanguage($idioma);
      //  return $this->mundo->fields(['name'])->byLanguage($idioma);
    }

    public function traerPorRegion($reg){
          
        return $this->mundo->byRegionalBloc($reg);
     //   return $this->mundo->fields(['name'])->byRegionalBloc($reg);
    }

    public function traerPorCapital($cap){

        return $this->mundo->byCapitalCity($cap);
       // return $this->mundo->fields(['name'])->byCapitalCity($cap);
    }

        
}















?>