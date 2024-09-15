<?php
include('../config/config.php'); // conexión PDO

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturar y sanitizar los datos del formulario
    $user_type = htmlspecialchars($_POST['user_type']);
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Hashear la contraseña antes de almacenarla
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Preparar la consulta SQL
        $sql = "INSERT INTO usuarios (nombres, cargo, password, fyh_creacion, estado) VALUES (:username, :user_type, :password, NOW(), 'activo')";
        $stmt = $conexion->prepare($sql);

        // Bind de los valores
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':user_type', $user_type);
        $stmt->bindParam(':password', $hashed_password);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            //echo "Registro exitoso.";
            header("Location: http://localhost:3000/frontend/src/pages/login.php?user_type=$user_type");
            exit();
        } else {
            echo "Hubo un problema al registrar el usuario.";
        }
    } catch (PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
}
?>
