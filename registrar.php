<?php
include("conexion.php");
$con=conectar();

$ide_persona=$_POST['Identificacion'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$edad=$_POST['Edad'];

$sql="INSERT INTO persona VALUES('$ide_persona','$nombre','$apellido','$edad')";
$query= mysqli_query($con,$sql);

if($query){
   
    Header("Location: persona.php");
    
}else {
}
?>


