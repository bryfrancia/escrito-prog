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

insertar (
$_POST['nombre'],
$_POST['apellido'],
$_POST['telefono'],
$_POST['fechaNacimiento'],
$_POST['edad'],
$_POST['email']
);

echo ("Los datos se ingresaron correctamente");



