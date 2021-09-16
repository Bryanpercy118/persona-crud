<?php
include("conexion.php");
$con=conectar();
$sql="SELECT *FROM persona";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header class="d" > 
        <h1 >CRUD</h1>
    </header>
      <div class="container mt-5">
        <div class="row">

        <div class="col-md-3">
        <h1>Registrar Datos</h1>
        <form action="registrar.php" method="POST">

            <input type="text" class="form-control mb-3" name="Identificacion" placeholder="N.Identificacion">
            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
            <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido">
            <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad">
            <input type="submit" class="btn btn-primary">
        </form>
        </div>
        <div class="col-md-8">
           <h1>Mostrar Tabla</h1>
           <table class="table" >
             <thead class="table-success table-striped" >
             <tr>
                    <th>N. Identificacion</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
                <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['Identificacion']?></th>
                        <th><?php  echo $row['Nombre']?></th>
                        <th><?php  echo $row['Apellido']?></th>
                        <th><?php  echo $row['Edad']?></th>    
                        <th><a href="update.php? id=<?php echo $row['Identificacion'] ?>" class="btn btn-info">Editar</a></th>
                        <th><a href="eliminar.php? id=<?php echo $row['Identificacion'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                        
                    </tr>
                <?php 
                    }
                ?>

                </tbody>
             
            </table>
        </div>
        </div>
    </div>



</body>
</html>
