<?php

class Marca_Modelo {
    
    private $id_marca;
    private $marca_vehiculo;
    
    public function __construct() {
        $this->id_marca=$id_marca;
        $this->marca_vehiculo=$marca_vehiculo;
    }
    
    
    function getId_marca() {
        return $this->id_marca;
    }

    function getMarca_vehiculo() {
        
        $fichero=fopen("Marcas_Vehiculos.txt","r");
       // $fichero=fopen("Marcas_Vehiculos.txt","r");
        
      
        while(!feof($fichero)) {
            $filas[]=fgets($fichero,999999);
        }
        
    $longitud=count($filas);
   for ($i=0;$i<$longitud;$i++) {
       
       
       if (($filas[$i]=="\r\n") || ($filas[$i]=="")){
           unset($filas[$i]);
       }
   }   


        return $this->marca_vehiculo[]=$filas;
        
    }

    function setId_marca($id_marca) {
        
        $fichero=fopen("Marcas_Vehiculos.txt","a");
        fwrite($fichero,$id_marca."; ");
        fclose($fichero);
    }

    function setMarca_vehiculo($marca_vehiculo) {
      
        $fichero=fopen("Marcas_Vehiculos.txt","a");
        fwrite($fichero,$marca_vehiculo."; ");
        fclose($fichero);
        
        //$this->marca_vehiculo = $marca_vehiculo;
    }

      
}




?>

