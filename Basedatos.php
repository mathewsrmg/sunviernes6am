<?php

class Basedatos{

    //VARIABLES O ATRIBUTOS
    public $usuarioBD="root";
    public $passwordBD="";

    //CONSTRUCTOR
    public function __construct(){}

    //FUNCIONES O METODOS este es para conectarnos en la base de datos 
    public function conectarBD(){
  
        try{
            $datosBD="mysql:host=localhost;dbname=tienda6";
            $conexionBD=new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
            return($conexionBD);

        }catch(PDOExeption $error){

            echo($error->getMessage());
            
        }
    }

    public function agregarDatos($consultaSQL){
        //1. se debe establecer una conexion con la BD
        $conexionBD=$this->conectarBD();

        //2.preparar la consulta para insertar datos
        $consultaAgregarDatos=$conexionBD->prepare($consultaSQL);

        //3.ejecutar la consulta
        $resultado=$consultaAgregarDatos->execute();

        //4.validar la operacion
        if($resultado){
            echo("exito insertando los datos");
        }else{
            echo("error insertando los datos");
        }
    }
    public function consultarDatos($consultaSQL){
        //1. se debe establecer una conexion con la BD
        $conexionBD=$this->conectarBD();

        //2.preparar la consulta para insertar datos
        $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

        //3.indicar el metodo para traer los datos
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        //4.se ejecuta la consulta
        $resultado=$consultaBuscarDatos->execute();

        //5.retorne los datos consultados!
        return($consultaBuscarDatos->fetchAll());
    }
}

?>