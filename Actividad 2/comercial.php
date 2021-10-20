<?php
require_once("empleado.php");

class Comercial extends Empleado{
    private $ventasminima;
    private $bonificacion;
    private $sueldototal;

    function __construct($nombre, $apellidos, $sueldobase, $ventasminima, $bonificacion,$sueldototal){
        parent::__construct($nombre, $apellidos, $sueldobase);
        $this->ventasminima = 10;
        $this->bonificacion = 500;
        $this->sueldototal = $sueldobase = 1200 +$this->bonificacion;

    }

    function getVentaminima(){
        return $this->ventasminima;

    }

    function getBonificacion(){
        return $this->bonificacion;

    }

    function getSueldototal(){
        $this->sueldototal = $sueldobase + $this->bonificacion;
        return $this->sueldototal;
    }

    function setVentasminima($ventasminima){
        $this->ventasminima = $ventasminima;
    }

    function setBonificacion($bonificacion){
        $this->bonificacion = $bonificacion;

    }

    function setSueldototal($sueldototal){
        $this->sueldototal= $sueldototal;
    }

    function __toString(){
        return "<br/>"."<br/>Comercial: ".parent::__toString()."<br/> Ventas Minima: ".$this->ventasminima."<br/> Bonificacion: ".$this->bonificacion." Euros". "<br/>Sueldo Total: ".$this->sueldototal." Euros";
    }



}







?>