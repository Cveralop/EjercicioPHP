<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  
    <title>Listar Usuarios</title>
</head>
<body>

<div class ="container">
    <h1 class="text-center">Usuarios Registrados</h1>
    <table class="table table-striped">
  <thead>
    <tr>    
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Rut</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha de Ingreso</th>
      <th scope="col">Cargo</th>
    </tr>
  </thead>
  <tbody>
    <?php include_once("list.php"); ?>
    <?php foreach($personas as $persona) { ?>          
        
        <tr>            
            <td> <?php echo $persona->Nombre ?>
            <td> <?php echo $persona->Apellido ?>
            <td> <?php echo $persona->Rut ?>
            <td> <?php echo $persona->Direccion ?>
            <td> <?php echo $persona->F_ingre ?>
            <td> <?php echo $persona->Cargo ?>
        </tr>

   <?php } ?>
  </tbody>
</table>
</div>
    
</body>
</html>