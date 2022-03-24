<?php

include("conexion2.php");


$email = $_POST["Email"];
$pass = $_POST["Pass"];


//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE Email = '$email' AND Pass='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $email'); window.location='registrosCurso.php' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='index.html' </script>";
	}
}



?>