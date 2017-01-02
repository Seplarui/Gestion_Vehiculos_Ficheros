<?php

error_reporting(0);

class ModeloV_Modelo {
    
    private $id_modelo;
    private $modelo_vehiculo;
    private $modelo_motor;
    
    public function __construct() {
        $this->id_modelo=$id_modelo;
        $this->modelo_vehiculo=$modelo_vehiculo;
        $this->modelo_motor=$modelo_motor;
    }
    function getId_modelo() {
        return $this->id_modelo;
    }

    function getModelo_vehiculo() {
        
        $archivo=fopen("..\Modelos_Vehiculos.txt","r");
        
        while(!feof($archivo)) {
            $filas[]=fgets($archivo,999999);
        }
        
        
        return $this->modelo_vehiculo[]=$filas;
    }

    function getModelo_motor() {
        
        
        
        return $this->modelo_motor;
    }

    function setId_modelo($id_modelo) {
        
        $archivo=fopen("Modelos_Vehiculos.txt","a");
        fwrite($archivo,$id_modelo."; ");
        fclose($archivo);
        //$this->id_modelo = $id_modelo;
    }

    function setModelo_vehiculo($modelo_vehiculo) {
        
        $archivo=fopen("Modelos_Vehiculos.txt","a");
        fwrite($archivo,$modelo_vehiculo."; ");
        fclose($archivo);
        
        //$this->modelo_vehiculo = $modelo_vehiculo;
    }

    function setModelo_motor($modelo_motor) {
        
        $archivo=fopen("Modelos_Vehiculos.txt","a");
        fwrite($archivo,$modelo_motor."; ");
        fclose($archivo);
        
        
        //$this->modelo_motor = $modelo_motor;
    }
    
    function setModelo_marca($modelo_marca) {
        $archivo=fopen("Modelos_Vehiculos.txt","a");
        fwrite($archivo,$modelo_marca."; ");
        fclose($archivo);
    }

  
}

    
    
    
?>