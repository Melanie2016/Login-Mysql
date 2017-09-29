<?php
session_start();
$error="";
    if(isset($_POST['btn1']))
    {
      include("abrir_conexion.php");

      $usuario=$_POST['usuario'];
      $nombre=$_POST['nombre'];
      $dir=$_POST['dir'];
      $clave=$_POST['clave'];


      $sql= "SELECT usuario FROM registro where usuario='$usuario'";
        
      $result= mysqli_query($conexion,$sql);
        
      $count= mysqli_num_rows($result);
      
      if($count>0){
        $error="El usuario ya existe, ingrese otro..";
      }


      if(!$resul=mysqli_query($conexion,"INSERT INTO $tabla_db1 (usuario,nombre,mail,clave) values ('$usuario','$nombre','$dir','$clave')"))
      {
        $error="error! Pruebe ingresando otro usuario";
      }



}

?>

<html>
  <head>
    <title>REGISTRAR</title>
      <style>
          h1{
              font-family:calibri black;
              font-size: 100px;
              color:crimson;
          }
          label{
              font-family: calibri;
              font-size: 25px;
              margin: 5%;
              padding: 3%;
          }
          a{
            float: right;
          }
          input{
              float: right;
              padding: 4px;
              width: 40%;
              border-radius: 5px;
              border:1pt solid coral;
          }
          
          .container{
              height: 40%;
              width: 50%;
              padding: 2%;
              margin-left: 25%;
              border: 1.5pt solid coral;
              border-radius: 10pt;
              
          }
          
          #btn1{
              padding: 1%;
              text-align: center;
              margin-top: 10%;
              margin-right: 45%;
              cursor:pointer ;
          }
          
          .alert{
              position: absolute;
              margin-left: 50%;
              background-color:lightsalmon;
              color:crimson;
              font-style: italic;
            
              border-radius: 2px;
              height: 3%;
              font-size: 18px;
              font-family: calibri black;
          
      </style>
    
  </head>
  <body>


    <div class="">
      <div class=""></div>
      <div class="">
      	<center><h1>REGISTRAR</h1></center>
      	<form name="form" method="POST" class="container" action="registro.php" >

        	<div> <!-- USUARIO -->
              <div class="alert">
                   <?php
                    echo $error;
                   /*
                              if(isset($_SESSION['error1'])){
                                  echo $_SESSION['error1'];
                              }else{
                                  if(isset($_SESSION['error7'])){
                                    echo $_SESSION['error7'];
                                  }
                                  echo"";
                              }
                              unset($_SESSION['error1']);
                    */

                   ?>
              
              </div>
              
        	    <label >Usuario</label>
        	    <input type="text" name="usuario"  id="usuario">
        	</div>

        	<div> <!-- NOMBRE -->
                <div class="alert">
                    <?php
                                if(isset($_SESSION['error2'])){
                                    echo $_SESSION['error2'];
                                }else{
                                    echo"";
                                }
                                unset($_SESSION['error2']);
                    
                    ?>
                </div>
                   
          	    <label >Nombre </label>
          	    <input type="text" name="nombre"  id="nombre">
        	</div>

         <div> <!-- EMAIL -->
             <div class="alert">
                 <?php
                              if(isset($_SESSION['error3'])){
                                  echo $_SESSION['error3'];
                              }else{
                                  echo"";
                              }
                              unset($_SESSION['error3']);

               ?>
             
             </div>
               
        	    <label >E-mail </label>
        	    <input type="text" name="dir"  id="dir">
      	 </div>

      	<div> <!-- CLAVE 1 -->
              <div class="alert">   
                  <?php
                              if(isset($_SESSION['error4'])){
                                  echo $_SESSION['error4'];
                              }else{
                                  echo"";
                              }
                              unset($_SESSION['error4']);

                   ?>
              
              </div>
                
        	    <label >Contrase&ntildea </label>
        	    <input type="password" name="clave"  id="clave">
      	</div>
              
        <div > <!-- CLAVE 2 -->
              <div class="alert">
                  <?php
                              if(isset($_SESSION['error5'])){
                                  echo $_SESSION['error5'];
                              }else{
                                  if(isset($_SESSION['error6'])){
                                      echo $_SESSION['error6'];
                                  }else{
                                      echo"";
                                  }
                                  echo"";
                              }
                              unset($_SESSION['error5']);
                              unset($_SESSION['error6']);

               ?>
              </div>
        	    <label >Confirmar Contrase&ntildea </label>
        	    <input type="password" name="clave2" id="clave2">
      	</div>
          
        <center><input type="submit" value="Registrar" id="btn1" name="btn1"></center>
          <br><br>
          <a href="login.php"> Volver a ingresar </a>
      </form>
  </body>

</html>