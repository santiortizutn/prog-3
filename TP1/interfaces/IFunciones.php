<?php


interface IFunciones{


    public function traerTodos();
    public function traerPorContinente($string);
    public function traerPorIdioma($string);
    public function traerPorRegion($string);
    public function traerPorCapital($string);



}