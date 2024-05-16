<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de ingreso</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilos personalizados para centrar el formulario */
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-container {
      width: 400px;
      height: 500px;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <div class="form-container">

    <form action="./view/username/login.php" method="post">

    <h2 class="text-center mb-4">Formulario de usuarios</h2>

      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese su nombre">
      </div>
      
      <div class="form-group">
        <label for="correo">Correo Electrónico:</label>
        <input type="text" name="correo_electronico" class="form-control" placeholder="correo">      
      </div>

      <button type="submit" class="btn btn-success">Enviar</button>
    </form>
  
</div>

</body>
</html>