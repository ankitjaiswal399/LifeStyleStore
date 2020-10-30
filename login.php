<!DOCTYPE>

<html>
<head>
   <!-- CSS file -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- jquery file -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- bootstrap file -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <style>
   .footer{
     position: fixed;
     top: 630px;
     left: 0px;
     width: 100%;
        background-color: #000;
        color:#fff;
        font-size:14px;
   }
   .row_style{
     margin: 100px 0px 100px 0px;
   }

   #center1{
     position: fixed;
     top: 50px;
     left: 350px;
   }
   </style>
   <title>login</title>

</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="nav navbar-header">
        <a href="index.php" class="navbar-brand">Lifestyle Store</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav navbar-right" >

          <li><a href="signup.php"><span class="glyphicon glyphicon-user">Signup</span></a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in">LogIn</span></a></li>

        </ul>
      </div>
    </div>
  </nav>

  <form>
  <div id="center1" class="container ">
    <div class="row row_style">
      <div class="col-xs-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3>LOGIN</h3>
        </div>
        <div class="panel-body">
          <p class="text-warning">Login to make a purchase</p>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="E-mail" placeholder="Email"></input>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="password"></input>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">LOGIN</button>
            </div>
          </form>
        </div>
        <div class="panel-footer">
           <p>Don't have an account? Register
        </div>
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

<?php
  if(isset($_REQUEST['E-mail']))
  {
    $a = $_REQUEST['E-mail'];
    $b = $_REQUEST['password'];

    $con = mysqli_connect('localhost','root','','store');
    $q = "select * from users where email = '$a' AND password = '$b'";
    $cq = mysqli_query($con,$q);

    if($row = mysqli_fetch_array($cq))
    {
      session_start();
      $_SESSION['k'] = $row['email'];
      $_SESSION['m'] = $row['id'];
      echo "<script> window.location = 'products.php'</script>";
    }
    else {
      echo"<script> alert('Invalid username and password')</script>";
    }
  }
 ?>
