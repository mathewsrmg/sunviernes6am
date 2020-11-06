<?php
include('sopa.php')

//usar el molde instanciar la clase (crear el objeto)
//un objeto es una variable
$sancocho= new Sopa();

//acceder a un atributo de la clase(usando el objeto)
$sancocho >cantidadAgua="2LITROS";
echo($sancocho->cantidadAgua);

//acceder a un metodo de la clase(usando el objeto)
$sancocho->prepararSopa();
?>