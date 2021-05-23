<?php 

require "conexion.php";
require "validaciones.php";


function insertar ($nombre,$apellido,$telefono,$fechaNacimiento,$edad,$email){
    $conexion= new mysqli(host,usuario,clave,bd);
    $sql = "INSERT INTO personas(nombre, apellido, telefono, fechaNacimiento,edad,email) VALUES ('$nombre','$apellido',
    $telefono, $fechaNacimiento, $edad,'$email')";
    $conexion -> query($sql);
    $conexion -> close();

}




