<?php

//error_reporting(0);
require_once ('../Modelo/ModeloV_Modelo.php');

$modelo_coche=new ModeloV_Modelo();
$matrizModelo=$modelo_coche->getModelo_vehiculo();

require_once ('../Vista/Modelo_Vista.php');

//print_r($matrizModelo);






?>