<?php
  $userType = $_REQUEST['user_type'];
  if ($userType == 'alumno') {
    header("Location: http://localhost/GitHub/Proyecto_Gestion_Escolar_Rural/frontend/src/pages/login.html");
    exit();
  } elseif ($userType == 'profesor') {
    header("Location: http://localhost/GitHub/Proyecto_Gestion_Escolar_Rural/frontend/src/pages/login.html");
    exit();
  } elseif ($userType == 'directivo'){
    header("Location: http://localhost/GitHub/Proyecto_Gestion_Escolar_Rural/frontend/src/pages/login.html");
    exit();
  }
?>


