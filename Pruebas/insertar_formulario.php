<form action="insertar_formulario.php" method="post">

<tr><td>Id:</td><td><input type="text" name="id"></td></tr>
<tr><td>Modelo:</td><td><input type="text" name="modelo"></td></tr>
<tr><td>Motor:</td><td><input type="text" name="motor"></td></tr>



<tr><td><input type="submit" name="enviar" value="Enviar"></td>
<td><input type="reset" name="borrar" value="Borrar"></td></tr>
</form>
<?php


$id=$_REQUEST['id'];
$modelo=$_REQUEST['modelo'];
$motor=$_REQUEST['motor'];

echo "<pre>";
echo "El id es: $id";
echo " El modelo es: $modelo";
echo " El motor es: $motor";
echo "</pre>";





?>