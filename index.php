<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </style>
</head>
<body>  

  
</body>
</html>
<?php
require("conexion.php");
$conexion = retornarConexion();

  $registros = mysqli_query($conexion, "select *  from usuarios") or
    die("Problemas en el select:" . mysqli_error($conexion));
?>

<br>
<br>
<a href="insertar.php"><button type="submit" class="btn btn-primary">Nuevo Registro</button></a>
<br><br>
<table class="table table-hover table-striped table-bordered display" id="tablausu">
    <thead>
        <tr>
           <th>Codigo</th> 
            <th>Nombre</th>
            <th>Email</th> 
            <th>Clave</th> 
            <th>Acciones</th> 
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php
  while ($reg = mysqli_fetch_array($registros)) { ?>
  <tr>
    <td> <?php echo $reg['id_usuario'] ; ?> </td>
    <td> <?php echo $reg['nombres'] ; ?> </td>
    <td> <?php echo $reg['email'] ; ?> </td>
    <td> <?php echo $reg['password_user'] ; ?> </td>
    <td> <button type="submit" class="btn btn-success">Editar</button></td>
    <td> <button type="submit" class="btn btn-danger">Eliminar</button></td>
   <?php
  } 
  ?>
    </tr>
    <?php
  mysqli_close($conexion);
  ?>
  </tbody>
  </table>