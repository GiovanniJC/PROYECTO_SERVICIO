

<?php
 function conexion(){
 $host="localhost";
 $user="root";
 $pass="";
 $bd="serviciobdgio";

 

$conexion=mysqli_connect($host,$user,$pass);

 mysqli_select_db($conexion,$bd);

return $conexion;

 }


 
?>