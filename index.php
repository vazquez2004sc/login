<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login en sistema</title>
        <meta charset="iso-8559-1"/>
        <!--da una referencia a la busqueda-->
 
    </head>
    <body>
       <h1> <header>LOGING</header> </h1>
        <form  method="POST" action="index.php">
            Username:<input type="text" name="user" id="user" placeholder="user"  ><br></br>
             Password:<input type="password" name="password" id="password" placeholder="Password" ><br></br>
             
      <input  type="submit"name="" value="Ingresar">
        </form>
    </body>
    <style>
            header{
              color: pink;
              font-family: Impact;
            }
            body{
                text-align: center;
                color: white;
                background-color: blueviolet;
                 padding: 5px;
                 font-size: 18px;
            }
            button{
                text-align: center;
                color: white;
                background-color: rgb(141, 85, 109);
                 padding: 5px;
                 font-size: 18px;
                 font-family: Impact;
            }
    </style>
</html>
<?php

if($_POST){
    session_start();
require('conexion.php');
   
        $user=$_POST['user'];
        $password=$_POST['password'];
       $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql=$conexion->prepare("select * from login where user=:user and password=:$password");
$sql->execute();

        $user=$sql->fetch(PDO::FETCH_ASSOC);
        if($user){
$_SESSION["user"]=$user["user"];

        header("location:formulario.html");
        }else{
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
    
}
?>