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
    <h2>REGISTRAR CURSO</h2>


      
<!-- 
      <form action="insertarCurso.php" method="POST"> -->
      <form action="insertarCurso.php" method="POST" class="row g-3">
        


        <div class="col-12">


<label for="text" class="form-label">Nombre</label>

<input type="text" class="form-control mb-3" name="nombre">

</div>


<div class="col-md-6">


<label for="text" class="form-label">Apellido Paterno</label>

<input type="text" class="form-control mb-3" name="Apaterno">

</div>


<div class="col-md-6">
<label for="text" class="form-label">Apellido Materno</label>

<input type="text" class="form-control mb-3" name="Amaterno">
</div>


<div class="col-12">
<label for="text" class="form-label">Nombre del Curso</label>
      <input type="text" class="form-control mb-3" name="curso">
</div>

<div class="col-md-6">


<label for="text" class="form-label">Fecha Inicio</label>
      <input type="text" class="form-control mb-3" name="fechaI">

</div>


<div class="col-md-6">
<label for="text" class="form-label">Feccha Final</label>
      <input type="text" class="form-control mb-3" name="fechaF">
</div>





<div class="col-md-4">


  <label for="text" class="form-label">Divisiones</label></br>
  
  <select class="form-select" aria-label="Default select example" name="division">
        <?php
        $con = conexion();
        #consulta de todos los paises
        $sql = 'SELECT * FROM division';
        $query = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($query)) {
          $iddivision = $row['id'];
          $nombredivision = $row['nombre'];
        ?>
          <option value="<?php echo $iddivision ?>"><?php echo $nombredivision ?></option>
        <?php
        }

        ?>

      </select>

</div>




<div class="d-grid gap-2">
<button type="submit" class="btn btn-warning">GUARDAR</button>

</div>

      </form>
    </div>


    <div class="formulario">




      <div class="row">

        <div class="col-md-10 text-center">
          <table class="table table-success table-striped">
            <thead class="table-primary table-striped">
              <h2>REGISTRADOS</h2>
              <tr class="table-info">
                <th>NOMBRE</th>
                <th>APATERNO</th>
                <th>AMATERNO</th>
                <th>CURSO</th>
                <th>FECHAI</th>
                <th>FECHAF</th>
                <th>DIVISION</th>

                <th></th>

              </tr>

            </thead>

            <tbody>
              <?php
              while ($row1 = mysqli_fetch_array($query1)) {
              ?>
                <tr>
                  <th><?php echo $row1['nombre'] ?></th>
                  <th><?php echo $row1['Apaterno'] ?></th>
                  <th><?php echo $row1['Amaterno'] ?></th>
                  <th><?php echo $row1['curso'] ?></th>
                  <th><?php echo $row1['fechaI'] ?></th>
                  <th><?php echo $row1['fechaF'] ?></th>
                  <th><?php echo $row1['division'] ?></th>


                  <th><a href="rep.php?id=<?php echo $row1['id'] ?>" class="btn btn-primary">Imprimir</a></th>
                </tr>
              <?php
              }
              ?>


            </tbody>

          </table>



        </div>


      </div>


      <form action="rep2.php">
        <input type="submit" value="IMPRIMIR TODOS LOS REGISTROS" name="btnregistrar">
      </form>

    </div>



  </div>

  








  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/main.js"></script>

</body>




</html>