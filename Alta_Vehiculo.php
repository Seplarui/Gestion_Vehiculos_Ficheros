<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Alta Vehículo</title>
</head>
<body>

<h1>Datos del Vehículo</h1>
<p>Alta Marca de Vehículo</p>

<table border="1">

    <form action="Alta_Vehiculo.php" method="post">

<tr><td>Id:</td><td><input type="text" name="id"></td></tr>
<tr><td>Marca:</td><td><input type="text" name="marca"></td></tr>

<tr><td><input type="submit" name="enviar" value="Enviar"></td>
<td><input type="reset" name="borrar" value="Borrar"></td></tr>

<?php
error_reporting(0);
include_once('/Modelo/Marca_Modelo.php');
if (($_REQUEST['id']!="" && $_REQUEST['marca']!="" )) {

    $tmp_id = (isset($_REQUEST['id'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['id'], ENT_QUOTES, "ISO-8859-1"))) : "";
$id_form=$tmp_id;

    $tmp_marca = (isset($_REQUEST['marca'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['marca'], ENT_QUOTES, "ISO-8859-1"))) : "";
$marca_form=$tmp_marca;
    
} else if ($_REQUEST['id']==""){
    echo "<p>Introduce algún valor en el id por favor</p>";
    
} else if($_REQUEST['marca']=="") {
    echo "<p>Introduce algún valor en la marca del vehículo por favor</p>";
}


$vehiculo = new Marca_Modelo();
$vehiculo->setId_marca($id_form);

$vehiculo->setMarca_vehiculo($marca_form);

?>
</form>
</table>
<a href="index.php">Inicio</a>
</body>
</html>