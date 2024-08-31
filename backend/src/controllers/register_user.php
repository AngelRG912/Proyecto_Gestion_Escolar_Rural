<?php
// Conexión a la base de datos (ajusta los parámetros según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$user_type = $_POST['user_type'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash de la contraseña para mayor seguridad

// Preparar y ejecutar la consulta SQL
$stmt = $conn->prepare("INSERT INTO usuarios (user_type, username, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $user_type, $username, $password);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
