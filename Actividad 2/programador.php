<?php
require_once("empleado.php");

class Programador extends Empleado{
    private $numhoras;
    private $precio;
    private $horasextras;
    private $bonificacion;
    private $sueldototal;


function __construct($nombre, $apellidos, $sueldobase,$numhoras, $precio,$horasextras,$bonificacion,$sueldototal){
    parent::__construct($nombre, $apellidos, $sueldobase);
    
    $this->numhoras = $numhoras;
    $this->precio = 20;
    $this->horasextras = $this->numhoras *  $this->precio;
    $this->bonificacion = 600;
    $this->sueldototal = $sueldobase = 1200 + $this->horasextras + $this->bonificacion;

}

function getNumhoras(){
    return $this->numhoras;
}

function getPrecio(){
    return $this->precio;
}

function getHorasextras(){
    $this->horasextras = ($this->numhoras * $this->precio);
    return $this->horasextras;

}

function getBonificacion(){
    return $this->bonificacion;

}

function getSueldototal(){
    return $this->sueldototal;
}

function setNumhoras($numhoras){
    $this->numhoras = $numhoras;

}

function setPrecio($precio){
    $this->precio = $precio;

}


function setHorasextras($horasextras){
    $this->horasextras = $horasextras;
}

function setBonificacion($bonificacion){
    $this->bonificacion = $bonificacion;
}

function setSueldototal($sueldototal){
    $this->sueldototal= $sueldototal;
} 

function __toString(){
    return "<br/>Programador: ".parent::__toString()."<br/> Numero de horas extras: ".$this->numhoras."<br/>Precio Hora Extra: ".$this->precio." Euros"."<br> Horas Extras: ".$this->horasextras." Euros"."<br/> Bonificacion: ".$this->bonificacion." Euros"."<br/> Sueldo Total: ".$this->sueldototal." Euros"."<br/>";
}




}





?>