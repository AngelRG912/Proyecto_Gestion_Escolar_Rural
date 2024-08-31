<?php
  $userType = $_REQUEST['user_type'];
  if ($userType == 'alumno') {
    header("Location: login.html");
  } elseif ($userType == 'profesor') {
      echo "background-image: url('../assets/img/Profesor.jpeg');";
  } else {
      echo "background-image: url('../assets/img/Niños.jpg');";
  }
?>
