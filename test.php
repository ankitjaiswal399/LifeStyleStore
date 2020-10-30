<?php
session_start();
  $b = $_SESSION['m'];
  $a = $_REQUEST['id'];

  $con = mysqli_connect('localhost','root','','store');
  $q = "select id from items where name = '$a'";

  $cq = mysqli_query($con,$q);


  if($row = mysqli_fetch_array($cq))
  {
    $i = "insert into users_items values ('','$b','$row[id]','added to cart')";
    $ci = mysqli_query($con,$i);

    if($ci)
    {
      echo"<script> alert('item added to cart') </script>";
      echo"<script> window.location ='products.php' </script>";
    }
    else {
      echo"<script> alert('item NOT added to cart') </script>";
    }
  }
  else {
    echo"<script> alert('item is NOT present in list') </script>";
  }
 ?>
