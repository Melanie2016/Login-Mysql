<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "mibd";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "registro"; 	   // tabla de usuarios
	// si uso objetos en la conexion debo usarlo en todo lo que uso
	$conexion = mysqli_connect($host,$usuariodb,$clavedb,$basededatos) or die ("me mori");



    //   https://www.youtube.com/watch?v=OsWBMmbPEig
?>