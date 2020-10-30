<?php
  session_start();
  if(!isset($_SESSION['k']))
  {

    echo"<script> window.loaction = 'index.php'</script>";
  }
  else
  {
    unset($_SESSION['k']);
    unset($_SESSION['m']);
    echo"<script> window.location = 'index.php'</script>";
  }
 ?>
