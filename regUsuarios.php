<?php

include("conexion2.php"); 
$nombre = $_POST["Nombre"]; 
$apaterno = $_POST["Apaterno"];
$amaterno = $_POST["Amaterno"];
$division = $_POST["Division"];
$email = $_POST["Email"];
$pass = $_POST["Pass"];
$cpass = $_POST["Cpass"];


//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO usuarios(Nombre,Apaterno,Amaterno,Division,Email,Pass,Cpass) values ('$nombre','$apaterno','$amaterno','$division','$email','$pass','$cpass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar.mysql_error($conn);
	}
}


?>