<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestión Escolar</title>
    <!--Conectar CSS-->
    <link rel="stylesheet" href="../src/styles/index.css" />
  </head>
  <body>
    <h1>Bienvenido a la plataforma del Programa de Educación Básica para Niños y Niñas de Familias Jornaleras Agrícolas Migrantes (PRONIM)</h1>
    <h2>Elige tu tipo de usuario</h2>
    <form action="../src/pages/login.php" method="get" class="button-container">
      <button type="submit" name="user_type" value="Alumno" class="alumno">Alumno</button>
      <button type="submit" name="user_type" value="Profesor" class="profesor">Profesor</button>
      <button type="submit" name="user_type" value="Directivo" class="directivo">Directivo</button>
    </form>
  </body>
</html>
