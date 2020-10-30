<!DOCTYPE>
<?php
  session_start();
  if(!isset($_SESSION['k']))
  {
    echo"<script> window.location = 'index.php'</script>";
  }
 ?>
<html>
<head>
   <!-- CSS file -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- jquery file -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- bootstrap file -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <style>

   #name{
     position: fixed;
     top: 50px;
     left: 50px;
   }
   #footer{
     position: absolute;
      padding: 10px 0;
      background-color: #101010;
      color:#9d9d9d;
      bottom: 0;
      width: 100%;
   }
   .row_style{
     margin: 100px 0px 100px 0px;
   }
   .table-responsive{
     margin: 150px 0px 150px 0px;
   }
   </style>
   <title>cart</title>

</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="nav navbar-header">
        <a href="products.php" class="navbar-brand">Lifestyle Store</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav navbar-right" >

          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
          <li><a href="settings.php"><span class="glyphicon glyphicon-cog">Settings</span></a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">LogOut</span></a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div id="name">
      <h1> Hii <?php
      $a = $_SESSION['m'];

      $con = mysqli_connect('localhost','root','','store');
      $q = "select name from users where id='$a'";
      $qe = mysqli_query($con,$q);
      $row = mysqli_fetch_array($qe);

      echo "$row[name]";
       ?>!! This is your cart.</h1>
  </div>

  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
  <div class="coantainer">
    <table class="table table-hover table-responsive table-bordered">
      <tbody class="text-center">
        <tr><th class="text-center">Item Number</th>
            <th class="text-center">Item Name</th>
            <th class="text-center">Price</th>
            <th class="text-center"></th>
        </tr>
        <?php
          $uid = $_SESSION['m'];
          $con = mysqli_connect('localhost','root','','store');
          $q = "select item_id from users_items where user_id = '$uid'";
          $qe = mysqli_query($con,$q);
          $i = 1;
          $total = 0;
          while($row = mysqli_fetch_array($qe))
          {
            $con = mysqli_connect('localhost','root','','store');
            $q1 = "select * from items where id ='$row[item_id]'";
            $qw = mysqli_query($con,$q1);

            if($row1 = mysqli_fetch_array($qw))
            {
              echo "<tr><td> $i </td>
                        <td> $row1[name] </td>
                        <td> $row1[price] </td>
                        <td> <a href='delete.php?id=$row[item_id]'> DELETE </a></td></tr>";

                        $i++;
                        $total = $total + $row1['price'];
            }
            else {
              echo"<script> alert(row1 is not running) </script>";
            }

          }
         ?>
        <tr><td></td>
            <td>Total</td>
            <td><?php echo "$total/-"; ?></td>
            <td><a href="success.php"><button class="btn btn-primary">Confirm Order</button></a></td>
        </tr>

      </tbody>
    </table>
  </div>
</div>
</div>

<div class="footer">
    <div class="conatainer">
      <p align="center">Copyright &copy; Lifestyle store. All Rights Reserved | Contact Us: +91 90000 00000.</p>
    </div>
  </div>


</body>
</html>
