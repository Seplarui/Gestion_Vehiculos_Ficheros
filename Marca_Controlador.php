<?php

//error_reporting(0);
require_once ('../Modelo/Marca_Modelo.php');

$marca_coche=new Marca_Modelo();
$matrizMarca=$marca_coche->getMarca_vehiculo();

require_once ('../Vista/Marca_Vista.php');

//print_r($matrizMarca);






?>