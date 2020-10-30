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
   </style>
   <title>Settings</title>

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

  <form action="password_change.php">
  <div class="coantainer ">
    <div class="row row_style">
      <div class="col-xs-4 col-xs-offset-4">
        <h3>Change Password</h3>
        <div class="form-group">
          <input type="password" class="form-control" id="Old" name="Old" placeholder="Old Password"></input>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="New" name="New" placeholder="New Password"></input>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="Retry" name="Retry" placeholder="Retry New Password"></input>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Change</button>
        </div>
      </div>
    </div>
  </div>
</form>

<div class="footer">
    <div class="conatainer">
      <p align="center">Copyright &copy; Lifestyle store. All Rights Reserved | Contact Us: +91 90000 00000.</p>
    </div>
  </div>


</body>
</html>
