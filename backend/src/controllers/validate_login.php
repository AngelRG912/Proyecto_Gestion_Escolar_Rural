<?php
include('../config/config.php'); //  conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario y sanitizarlos
    $user_type = htmlspecialchars($_POST['user_type']);
    $user = htmlspecialchars($_POST['username']);
    $pass = $_POST['password']; // La contraseña se debe verificar más tarde

    try {
        // Consulta SQL para verificar el usuario
        $sql = "SELECT * FROM usuarios WHERE cargo = :user_type AND nombres = :username";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':user_type', $user_type);
        $stmt->bindParam(':username', $user);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Mostrar datos recuperados para depuración
        echo "<pre>";
        print_r($result);
        echo "</pre>";

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


