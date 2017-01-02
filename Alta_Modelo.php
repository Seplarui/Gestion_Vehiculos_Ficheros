<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Alta Modelo Vehículo</title>
</head>
<body>
   <?php
<<<<<<< HEAD
    require_once("Modelo/Marca_Modelo.php");
    //require_once("ficheros.php");
   echo "kk Alta modelo encima de formulario";
   $kks=new Marca_Modelo();
   $mat=$kks->getMarca_vehiculo();
   //MARCA_VISTA.PHP
    /*$cadena=implode(":",$matrizMarca);
    $reemplazo=str_replace(";","",$cadena);
    $cadena_array=explode(" ",$reemplazo);*/
   //print_r($mat);
   $cad=implode(":",$mat);
   $reemp=str_replace(";","",$cad);
   $cadena_vector=explode(" ",$reemp);
   $long_vector=count($cadena_vector);
   //echo "<pre>";
   //echo "Cadena tratada. Con espacios<br/>";
   //print_r($cadena_vector);
   for ($k=0;$k<$long_vector;$k++) {
       if ($cadena_vector[$k]=="") {
           unset($cadena_vector[$k]);
       }
   }
   $array_d=  array_values($cadena_vector);
   print_r($array_d);
=======
   require_once ("Modelo/Marca_Combo.php");
   echo "kk Alta modelo encima de formulario";
   
   
>>>>>>> e30d17ab42d914943d41bab27bd0b97fe54aff07
   ?>

<h1>Datos del Modelo</h1>
<p>Alta Modelo de Vehículo</p>

<table border="1">

    <form action="Alta_Modelo.php" method="post">

<tr><td>Id:</td><td><input type="text" name="id"></td></tr>
<tr><td>Modelo:</td><td><input type="text" name="modelo"></td></tr>
<tr><td>Motor:</td><td><input type="text" name="motor"></td></tr>
<<<<<<< HEAD
<tr><td>Marca:</td><td>
    <?php
       
    $vector_marcas=$array_d;
    $longitud_vector=count($array_d);
    $nombre="marcas";
    $resultado=lista_marcas($nombre, $vector_marcas);
    echo $resultado;
    
    function lista_marcas($nombre,$marcas) {
    
    $vector_marcas=$marcas;
    $longitud_vector=count($vector_marcas);
    $txt="<select name='$nombre' id='$nombre'>";
    for($i=0;$i<$longitud_vector;$i++) {
        if($i%2!=0) {
        $txt.="<option value='$i'>".$vector_marcas[$i].'</option>';
        }
    
    }
    $txt.='</select>';
    return $txt;
}
//    print_r($array_d);
  
    ?>   
        </td></tr>
=======
<tr><td>Marca:</td><td><select name="marca" id="marca">
            
            <?php
           // $marca_coche=new Marca_Modelo();
            //$matriz_combo=$marca_coche->getMarca_vehiculo();
            //echo "<pre>";
            //print_r($matriz_combo);
            //echo "</pre>";
           /* $cadena=implode(":",$matrizMarca);
            $reemplazo=str_replace(";","",$cadena);
            $cadena_array=explode(" ",$reemplazo);
            $nombre='marcas';
            
            $resultado=  lista_marcas($nombre, $cadena_array);
            echo $resultado;*/
            
            //echo "Prueba";
            
            ?>
    
            
            
            
        </select></td></tr>
>>>>>>> e30d17ab42d914943d41bab27bd0b97fe54aff07


<tr><td><input type="submit" name="enviar" value="Enviar"></td>
<td><input type="reset" name="borrar" value="Borrar"></td></tr>

<?php

//error_reporting(0);

include_once ('/Modelo/ModeloV_Modelo.php');
if (($_REQUEST['id']!="" && $_REQUEST['modelo']!="" && $_REQUEST['motor']=!"")) {
    
        $tmp_id = (isset($_REQUEST['id'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['id'], ENT_QUOTES, "ISO-8859-1"))) : "";
$id_form=$tmp_id;

    $tmp_modelo = (isset($_REQUEST['modelo'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['modelo'], ENT_QUOTES, "ISO-8859-1"))) : "";
$modelo_form=$tmp_modelo;

    $tmp_motor = (isset($_REQUEST['motor'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['motor'], ENT_QUOTES, "ISO-8859-1"))) : "";
$motor_form=$tmp_motor;
} else if ($_REQUEST['id']==""){
    
    echo "<p>Introduce algún valor en el id por favor. </p>";
    
} else if ($_REQUEST['modelo']="") {
    echo "<p>Introduce algún valor en el modelo del vehículo por favor. </p>";
} else if($_REQUEST['motor']="") {
    echo "<p>Introduce algún valor en el motor del vehículo por favor. </p>";
}
$tmp_marcaModelo=$_REQUEST['marcas'];
$marcas_form=$tmp_marcaModelo;

$modelo=new ModeloV_Modelo();
$modelo->setId_modelo($id_form);
$modelo->setModelo_vehiculo($modelo_form);
$modelo->setModelo_motor($motor_form);
$modelo->setModelo_marca($marcas_form);

//print_r($modelo->setModelo_marca($marcas_form));

//FUNCIÓN PARA EL COMBOBOX Y EXTRACCIÓN DATOS DEL ARRAY



//FUNCIÓN PARA EL COMBOBOX Y EXTRACCIÓN DATOS DEL ARRAY

function lista_marcas($nombre,$marcas) {
    
    $vector_marcas=$marcas;
    $longitud_vector=count($vector_marcas);
    $txt="<select name='$nombre' id='$nombre'>";
    for($i=0;$i<$longitud_vector;$i++) {
        
        $txt.="<option value='$i'>".$vector_marcas[$i].'</option>';
    
    }
    $txt.='</select>';
    return $txt;
}

?>

</form>
</table>
<a href="index.php">Inicio</a>
</body>
</html>
