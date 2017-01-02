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
<h1 align="center">Gestión de Modelos de Coches</h1>
<hr>
<ul><li><a href="../alta_modelo.php">Alta Modelos</a></li></ul>

<?php
//error_reporting(0);

require_once '../Controlador/Modelo_Controlador.php';
//echo "Esto es la matrizModelo en la vista <br>";
//print_r($matrizModelo);
$cadena=implode(":",$matrizModelo);
$reemplazo=  str_replace(";", "", $cadena);
$cadena_array=explode(" ",$reemplazo);
$longitud=count($cadena_array);

for ($i=0;$i<$longitud;$i++) {
    if($cadena_array[$i]=="") {
        unset($cadena_array[$i]);
    }
}

$array_def=array_values($cadena_array);
//echo "<br>Valor de la cadena_array definitiva kk ";
//print_r($array_def);
echo "<br>";
//print_r($cadena);

/*echo "<pre>";
echo "Valor del array. ";
print_r($array_def);
echo "</pre>";*/
?>

<table border="2">
    
    <tr><td>ID MODELO</td><td>MODELO</td><td>MOTOR</td></tr>
    
    <?php
    
    $longitud_def=count($array_def);
    $y=0;
    //$val_longitud=$longitud*2;
    //print_r($val_longitud);
    
    for($j=0;$j<$longitud_def;$j++) {
        if ($y<$longitud_def) {
        echo "<tr>";
        echo "<td>".$array_def[$y]."</td><td>".$array_def[$y+1]."</td><td>".$array_def[$y+2]."</td>";
        echo "</tr>";
        $y=$y+3;
            
        }
    }
?>
</table>    

</div>
</body>
</html>
