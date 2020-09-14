<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="uft-8">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<title>Bienvenido</title>
</head>
<body>

<div class ="justify-content-center">
<h1 class="text-left">Registro de Usuarios</h1>

<form action ="reg.php" method="post">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nombre</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Apellido</label>
      <input type="text" class="form-control" name="lastname" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Rut</label>
      <input type="text" class="form-control"name="rut" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault04">Direccion</label>
      <input type="text" class="form-control" name="direccion" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault05">Fecha</label>
      <input type="text" class="form-control" name="fecha" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault04">Cargo</label>
      <input type="text" class="form-control" name="cargo" required>
    </div>
  <button class="btn btn-primary" type="submit">Registrar</button>
</form>
</div>  

</body>

</html>	