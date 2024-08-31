<?php
  $userType = $_POST['user_type'];
  $claseFondo = "../assets/img/Imagen.jpeg";
  if ($userType == 'alumno') {
    header("Location: http://localhost:3000/frontend/src/pages/login.php");
    $claseFondo = "fondo-alumno";
  } elseif ($userType == 'profesor') {
    header("Location: http://localhost:3000/frontend/src/pages/login.php");
    $claseFondo = "fondo-alumno";
  } else {
    header("Location: http://localhost:3000/frontend/src/pages/login.php");
    $claseFondo = "fondo-alumno";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <!--Conectar el archivo CSS-->
    <link rel="stylesheet" href="../styles/login.css" />
  </head>
  <body>
    <h2>Login de </h2>
    <form action="../../../backend/src/controllers/validate_login.php" method="post">
      <input type="hidden" name="user_type" value=""/>
      <label for="username">Usuario:</label>
      <input type="text" id="username" name="username" required />
      <br />
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required />
      <br />
      <button type="submit">Ingresar</button>
    </form>
    <p class="register-link">¿No tienes una cuenta?<a href="../../../backend/src/controllers/register_user.php">Regístrate aquí</a></p>
  </body>
</html>
