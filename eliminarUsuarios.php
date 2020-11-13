<?php
    //1. Incluir el archivo de base de datos
    include("Basedatos.php");

    //2. RECIBA EL ID A ELIMINAR
    $id=$_GET["id"];
    echo($id);

    //3. Crear un objeto (sacar copia) de la Basedatos
    $transaccion= new Basedatos

    //4. Crear una consulta SQL para eliminar datos
    $consultaSQL="DELETE FROM usuario WHERE idUsuario='$id'";

    //5. Ejecute el metodo elinimarUsuario
    $transaccion->eliminarDatos($consultaSQL);

?>