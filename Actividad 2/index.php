<?php
require("programador.php");
require("comercial.php");

$empleados = array();
$empleados[0] = new Programador("Ivan", "Moreno Hurtado",1300,5,30,600,50,100);
$empleados[1] = new Programador("Willy", "Lopez Garcia",1000,4,20,600,50,100);
$empleados[2] = new Comercial("Rafael ", "Serrate Cedano",1500,10,100,600);
$empleados[3] = new Comercial("Ronel ", "Valdez De Leon",1300,10,100,600);

foreach($empleados as $empleado){
    echo $empleado;
}






?>