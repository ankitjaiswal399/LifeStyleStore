<?php
 $a = $_REQUEST['id'];
 $con = mysqli_connect('localhost','root','','store');
 $q = "delete from users_items where item_id = '$a'";
 $qe = mysqli_query($con,$q);

 if($qe)
 {
   echo"<script> alert('Iten deleted successfully')</script>";
   echo"<script> window.location='cart.php'</script>";
 }
 else {
   echo"<script> alert('Iten NOT deleted successfully')</script>";
 }
 ?>
