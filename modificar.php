<?php

include("conexion.php");
$con=conectar();

$ide_persona=$_POST['Identificacion'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$edad=$_POST['Edad'];

$sql="UPDATE persona SET Nombre='$nombre',Apellido='$apellido',Edad='$edad' 
WHERE Identificacion='$ide_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: persona.php");
    }
?>