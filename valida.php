
<?php
	include("abrir_conexion.php");
	

	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	
// traigo los usuarios de la base de datos
	$sql= "SELECT * FROM $tabla_db1 WHERE usuario='$usuario' and clave='$clave' ";
	
	$result= mysqli_query($conexion,$sql);
	
	$count= mysqli_num_rows($result);
	/*
	$row= mysqli_fetch_assoc($result); 
	 
	var_dump($row); // escupe lo que tiene la variable 
	exit();
	*/
	

	// Si el resultado combinado $usuario y $clave,fila de la tabla debe estar en 1 fila

		if($count>0){
			session_start();     
			$_SESSION['usuario']=$usuario;
			header('location: seguro.php');
			exit();
		}else{
			echo" CUAK! sigue sin andar";
			exit();
			/*header('location: login.php');*/
		}

?>










<!--  ejemplo de internet -->
<!-- ejemplo url: http://comocrearmiweb.net/login-php-mysql/ -->

<!--
	include("abrir_conexion.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// Usamos el nombre de usuario enviado de nuestro form
		
		$usuario=$_POST['usuario'];
		$clave=$_POST['clave']; 


		$sql="SELECT * FROM $tabla_db1
				WHERE usuario='$usuario' and clave='$clave'";
		$result= mysqli_query($basededatos,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active =$row['active'];
		
		$count= mysqli_num_rows($result); // en el ejemplo que vimos en clase seria la variable $fila


		  // Si el resultado combinado $usuario y $clave,fila de la tabla debe estar en 1 fila

		if($count==1){
			session_register("usuario");     
			$_SESSION['usuario']=$usuario;
			header('location: seguro.php');

		}else{
			echo" CUAK! sigue sin andar";
			exit();
			/*header('location: login.php');*/
		}
	
	}
-->