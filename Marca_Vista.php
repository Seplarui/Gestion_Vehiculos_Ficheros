<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Marca Vista</title>

	<style type="text/css">

	td {
		border:1px dotted #FF0000;
		}
	</style>
	
</head>
<body>
<div align="center">
<h1 align="center">Gestión de Marcas de Coches</h1>
<hr>
<ul><li><a href="../alta_vehiculo.php">Alta Vehículo</a></li></ul>

<!--<table border="1">

<tr><td>LISTADO DE MARCAS DE COCHES</td>-->

<?php
error_reporting(0);
require_once('../Controlador/Marca_Controlador.php');

$cadena=implode(":",$matrizMarca);
$reemplazo=str_replace(";","",$cadena);
$cadena_array=explode(" ",$reemplazo);
$longitud=count($cadena_array);

for($i=0;$i<$longitud;$i++) {
    
    if($cadena_array[$i]=="") {
        unset($cadena_array[$i]);
    }
}

$array_def=  array_values($cadena_array);

?>


<!--<table border="1">-->
    
<table border="2">
    <tr><td>ID VEHÍCULO</td><td>MARCA VEHÍCULO</td></tr>
    
    
    <?php
    
    $longitud=count($array_def);
    $x=0;
    //$val_longitud=$longitud*2;
    //print_r($val_longitud);
    for($i=0;$i<$longitud;$i++) {
        
        if ($x<$longitud) {
            
        
        
        echo "<tr>";
        echo "<td>".$array_def[$x]."</td><td>".$array_def[$x+1]."</td>";
        echo "</tr>";
        $x=$x+2;
        }
        
    }
    
    ?>
    
        
        
    
    
</table>


</body>
</html>