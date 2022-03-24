<?php
include("conexion.php");
$conexion = conexion();

$sql = "SELECT * FROM imprimir";
$query1 = mysqli_query($conexion, $sql);
$row1 = mysqli_fetch_array($query1);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">

  <title>IMPRIMIRPDF</title>
</head>

<body>

  <div class="contenedor-form">
    <div class="toggle">
      <span>REGISTROS</span>
    </div>


    <div class="formulario">


      <h2 class="fw-bold text-center py-5" mb-5>REGISTRO DE CURSO</h2>

      <form class="row g-3">

  
</form>
    </div>


    