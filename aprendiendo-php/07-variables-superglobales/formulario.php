<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario en PHP</title>
</head>
<body>
  <h1>Formulario en PHP</h1>
  <form method="POST" action="recibir.php">
  <p> 
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre">
    </p>
    <p> 
      <label for="apellidos">Apellidos</label>
      <input type="text" name="apellidos">
    </p>
    <p>
      <input type="submit" value="Enviar datos">
    
    </p>

  
  </form>
</body>
</html>