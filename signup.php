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
   .footer{
     position: fixed;
     top: 630px;
     left: 0px;
     width: 100%;
        background-color: #000;
        color:#fff;
        font-size:14px;
   }

   </style>
   <title>SignUp</title>

</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="nav navbar-header">
        <a href="products.php" class="navbar-brand">Lifestyle Store</a>
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


  <div class="coantainer ">
    <div class="row row_style">
      <form>
      <div class="col-xs-4 col-xs-offset-4">
        <h2>SIGN UP</h2>
        <div class="form-group">
          <input type="text" class="form-control" name="Name" placeholder="Name"></input>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="E-mail" placeholder="Email"></input>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="Password" placeholder="Password"></input>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control" name="Contact" placeholder="Contact"></input>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="City" placeholder="City"></input>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="Address" placeholder="Address"></input>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
      </div>
    </form>
    </div>
  </div>


  <div class="footer">
      <div class="conatainer">
        <p align="center">Copyright &copy; Lifestyle store. All Rights Reserved | Contact Us: +91 90000 00000.</p>
      </div>
    </div>


</body>
</html>

<?php
  if(isset($_REQUEST['Name']))
  {
    $a = $_REQUEST['Name'];
    $b = $_REQUEST['E-mail'];
    $c = $_REQUEST['Password'];
    $d = $_REQUEST['Contact'];
    $e = $_REQUEST['City'];
    $f = $_REQUEST['Address'];

    $con = mysqli_connect('localhost','root','','store');
    $q = "insert into users values ('','$a','$b','$c','$d','$e','$f')";
    $cq = mysqli_query($con,$q);

    if($cq)
     {
       echo"<script> window.location = 'registered.php' </script>";
     }
     else {
       echo"<script> alert('Unccessfull registration') </script>";
       echo"<script> window.location = 'signup.php' </script>";
     }
  }
 ?>
