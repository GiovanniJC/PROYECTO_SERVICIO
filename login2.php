<?php
  require 'conexion2.php';

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

  $usuarios = $mysqli->query("SELECT * FROM usuarios WHERE Email = '".$_POST['Email']."'
  AND Pass='".$_POST['Pass']."'");


  if($usuarios->num_rows == 1):
    $datos=$usuarios->feth_assoc();
    echo json_encode(array('error' => false, 'tipo' => $datos['Email']));


  else:
    echo json_encode(array('error' => true));
  endif;

  $mysqli->close();


?>