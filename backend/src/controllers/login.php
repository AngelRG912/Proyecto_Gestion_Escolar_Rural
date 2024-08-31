<?php
  $userType = htmlspecialchars($_GET['user_type']);
  if ($userType == 'alumno') {
      echo "background-image: url('../assets/img/Niños.jpg');";
  } elseif ($userType == 'profesor') {
      echo "background-image: url('../assets/img/Profesor.jpeg');";
  } else {
      echo "background-image: url('../assets/img/Niños.jpg');";
  }
?>
