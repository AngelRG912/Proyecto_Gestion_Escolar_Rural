<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <!--Conectar el archivo CSS-->
    <link rel="stylesheet" href="../styles/login.css" />
  </head>
  <body style=<?php
    $userType = htmlspecialchars($_GET['user_type']);
    if ($userType == 'alumno') {
        echo "background-image: url('../assets/img/Niños.jpg');";
    } elseif ($userType == 'profesor') {
        echo "background-image: url('../assets/img/Profesor.jpeg');";
    } else {
        echo "background-image: url('../assets/img/Niños.jpg');";
    }
    ?>>
    <h2>Login de <?php echo htmlspecialchars($_GET['user_type']); ?></h2>
    <form action="validate_login.php" method="post">
      <input
        type="hidden"
        name="user_type"
        value="<?php echo htmlspecialchars($_GET['user_type']); ?>"
      />
      <label for="username">Usuario:</label>
      <input type="text" id="username" name="username" required />
      <br />
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required />
      <br />
      <button type="submit">Ingresar</button>
    </form>
    <p class="register-link">
      ¿No tienes una cuenta?
      <a
        href="register.php?user_type=<?php echo htmlspecialchars($_GET['user_type']); ?>"
        >Regístrate aquí</a
      >
    </p>
  </body>
</html>
