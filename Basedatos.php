<?php

class Basedatos{

    //VARIABLES O ATRIBUTOS
    public $usuarioBD="root";
    public $passwordBD="";

    //CONSTRUCTOR
    public function __construct(){}

    //FUNCIONES O METODOS
    public function conectarBD(){
  
        try{
            $datosBD="mysql:host=localhost;dbname=tienda6";
            $conexionBD=new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
            echo("conexion exitosa");
        }catch(PDOExeption $error){

            echo($error->getMessage());
            
        }
    }
}

?>