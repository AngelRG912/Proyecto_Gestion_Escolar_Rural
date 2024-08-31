<?php
  $userType = $_REQUEST['user_type'];
  if ($userType == 'alumno') {
    header("Location: http://localhost:3000/frontend/src/pages/login.html");
  } elseif ($userType == 'profesor') {
    header("Location: http://localhost:3000/frontend/src/pages/login.html");
  } else {
    header("Location: http://localhost:3000/frontend/src/pages/login.html");
  }
?>
