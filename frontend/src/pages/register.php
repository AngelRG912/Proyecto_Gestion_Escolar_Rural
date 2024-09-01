<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro de <?php echo htmlspecialchars($_GET['user_type']); ?></h2>
    <form action="../../../backend/src/controllers/register_user.php" method="post">
        <input type="hidden" name="user_type" value="<?php echo htmlspecialchars($_GET['user_type']); ?>">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>