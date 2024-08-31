<?php
include('../config/config.php'); // Asegúrate de incluir el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $user_type = htmlspecialchars($_POST['user_type']);
    $user = htmlspecialchars($_POST['username']);
    $pass = $_POST['password'];

    try {
        // Consulta SQL para verificar usuario
        $sql = "SELECT * FROM usuarios WHERE cargo = :user_type AND nombres = :username";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':user_type', $user_type);
        $stmt->bindParam(':username', $user);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Verificar la contraseña
            if (password_verify($pass, $result['password'])) {
                // Inicio de sesión exitoso
                echo "Bienvenido, " . htmlspecialchars($user) . "!";
                // Redirigir a la página correspondiente
                // header("Location: dashboard.php");
                // exit();
            } else {
                // Contraseña incorrecta
                echo "Acceso denegado. Contraseña incorrecta.";
            }
        } else {
            // Usuario no encontrado
            echo "Acceso denegado. Usuario no encontrado.";
        }
    } catch (PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
}
?>


