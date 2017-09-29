<?php
session_start();
include("registro.php");
include("abrir_conexion.php");
// https://www.youtube.com/watch?v=mF9GeqiOsVE 
/*
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$email=$_POST['mail'];
$clave=$_POST['clave'];*/
$clave2=$_POST['clave2'];
 

if($usuario==""){
    $_SESSION['error1']="Debe generar un usuario";
}

if($nombre==""){
    $_SESSION['error2']="Debe colocar su nombre";
}

if($dir==""){
    $_SESSION['error3']="Debe colocar un email";
}

if($clave==""){
    $_SESSION['error4']="Debe ingresar una clave";
}


if($clave2==""){
    $_SESSION['error5']="Debe volver a ingresar una clave";
}

if(!($clave == $clave2)){
    $_SESSION['error6']="Las claves no coinciden";
}



header('location: registro.php');





?>