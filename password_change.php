<?php
    $a = $_REQUEST['Old'];
    $b = $_REQUEST['New'];
    $c = $_REQUEST['Retry'];
    session_start();
    $d = $_SESSION['k'];
    $e = $_SESSION['m'];
    if($b == $c)
    {$con = mysqli_connect('localhost','root','','store');
    $q = "update users set password = '$c' where email = '$d' AND id = '$e' AND password = '$a'";
    $cq = mysqli_query($con,$q);

    if($cq)
    {
        echo"<script> alert('Password is Changed') </script>";
        echo"<script> window.location = 'products.php' </script>";
    }
    else {
        echo"<script> alert('problem changing in password') </script>";
    }
  }
  else {
    echo"<script> alert('New password and Retry New password are different') </script>";
  }

 ?>
