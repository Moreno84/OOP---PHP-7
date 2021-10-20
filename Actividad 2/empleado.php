<?php

//Atributos
class Empleado{
    private $nombre;
    private $apellidos;
    private $sueldobase;

//Metodos

    function __construct($nombre, $apellidos, $sueldobase){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldobase = 1200;
    }


    function getNombre(){
        return $this->nombre;
    }

    
    function getApellidos(){
        return $this->apellidos;
    }

    function getSueldobase(){
        return $this->sueldobase;

    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellido($apellidos){
        $this->apellidos = $apellidos;
    }

    function setSueldobase($sueldobase){
        $this->sueldobase = $sueldobase;
    }

    function __toString(){
        return "<br/>Nombre: ".$this->nombre."<br/> Apellidos: ".$this->apellidos." <br/> Sueldo Base: ".$this->sueldobase." Euros";
    }

}