<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
      display: flex;
      flex-direction: column;
      width: 400px;
      height: 500px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .boton {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 5px;
    }
  </style>

</head>
<body>

    <div class="form-container">
        <h2>No esta autorizado</h2>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdgDwfWA_MqonFaHU06hL8Ub7WkUV1_1eNcxh222XLCg&s" alt=""> 
        
        <div class="boton">
            <button class="btn btn-warning" onclick="goBack()">Regresar</button>  
        </div>
    </div>
    
</body>
</html>

<script>
    function goBack() {
        window.history.back();
    }  
</script>
