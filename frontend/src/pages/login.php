<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <!--Conectar CSS-->
  <link rel="stylesheet" href="../styles/login.css" />
</head>
<body class="<?php echo htmlspecialchars($_GET['user_type']); ?>">
  <h2>Inicio de sesión (<?php echo htmlspecialchars($_GET['user_type']); ?>)</h2>
  <form action="../../../backend/src/controllers/validate_login.php" method="post">
    <input type="hidden" name="user_type" value="<?php echo htmlspecialchars($_GET['user_type']); ?>" />
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required />
    <br />
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required />
    <br />
    <button type="submit">Ingresar</button>
  </form>
  <p class="<?php echo htmlspecialchars($_GET['user_type']); ?>">¿No tienes una cuenta?<br>
  <a href="../pages/register.php?user_type=<?php echo htmlspecialchars($_GET['user_type']); ?>">Regístrate aquí</a></p>
</body>

</html>