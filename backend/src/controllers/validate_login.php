<!-- validate_login.php -->
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Cambia por tu contraseña
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$user_type = $_POST['user_type'];
$user = $_POST['username'];
$pass = $_POST['password'];

// Consulta SQL para verificar usuario
$sql = "SELECT * FROM usuarios WHERE tipo_usuario = ? AND nombre_usuario = ? AND contrasena = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $user_type, $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    echo "Bienvenido, " . htmlspecialchars($user) . "!";
    // Redirigir a la página correspondiente
} else {
    // Inicio de sesión fallido
    echo "Acceso denegado";
}

$stmt->close();
$conn->close();
?>
