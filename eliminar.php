<?php

include("conexion.php");
$con=conectar();

$ide_persona=$_GET['id'];

$sql="DELETE FROM persona WHERE Identificacion='$ide_persona' ";
$query=mysqli_query($con,$sql);

    if($query){

        Header("Location: persona.php");
    }

?>
