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
   /*#footer{
     position: fixed;
      padding: 10px 0;
      top: 610px;
      left: 0px;
      background-color: #101010;
      color:#9d9d9d;
      width: 100%;
   }*/
   .row_style{
     margin: 100px 0px 100px 0px;
   }
   </style>
   <title>Products</title>

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

<form action="add_to_cart.php">
  <div class="coantainer">
    <div class="jumbotron">
      <h1>Welcome to our LifeStyle Store!</h1>
      <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
    </div>
  </div>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://news.mapcamera.com/media/72/D4S-S2.jpg">
            <h3>Nikon DSLR's</h3>
            <p>Price: Rs 36000.00
            <a href="add_to_cart.php?id=Nikon DSLR"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="http://www.switchbacktravel.com/sites/default/files/images/articles/Canon%2070D%20DSLR%20camera.jpg">
            <h3>Canon DSLR's</h3>
            <p>Price: Rs 40000.00
            <a href="add_to_cart.php?id=Canon EOS"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://www.wired.com/images_blogs/gadgetlab/images/2008/09/17/sony_a900_04_660x.jpg">
            <h3>SONY DSLR's</h3>
            <p>Price: Rs 45000.00
            <a href="add_to_cart.php?id=Sony DSLR"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://c.slashgear.com/wp-content/uploads/2009/03/olympus-e620_9649.jpg">
            <h3>Olympus DSLR's</h3>
            <p>Price: Rs 80000.00
            <a href="add_to_cart.php?id=Olympus DSLR"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://ae01.alicdn.com/kf/HTB1EuB1PFXXXXcAXFXXq6xXFXXXB/MEGIR-Quartz-Watch-Men-s-Chronograph-Titan-Watch-Genuine-Leather-Luxury-Military-Watches-Relogio-Masculino-SL2020G.jpg_640x640.jpg">
            <h3>MEGIR watche's</h3>
            <p>Price: Rs 200000.00
            <a href="add_to_cart.php?id=MEGIR"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://s-media-cache-ak0.pinimg.com/736x/0a/1b/e0/0a1be046bcdf64e53f164c3ada2ddc45.jpg">
            <h3>AnilArjandas watche's</s></h3>
            <p>Price: Rs 300000.00
            <a href="add_to_cart.php?id=Anil"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://s-media-cache-ak0.pinimg.com/736x/77/4c/14/774c1488ab5f8f2ce65a763334081cc4.jpg">
            <h3>Patek Philippe watch's</h3>
            <p>Price: Rs 360000.00
            <a href="add_to_cart.php?id=HMT Milan"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://s-media-cache-ak0.pinimg.com/736x/e9/15/7c/e9157c349fe71e67563ffbd285905630.jpg">
            <h3>Rolex</h3>
            <p>Price: Rs 3600000.00
            <a href="add_to_cart.php?id=Rolex"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://ae01.alicdn.com/kf/HTB1AfgVQpXXXXaBXFXXq6xXFXXXj/PaulJones-57xx-Fashion-Long-Sleeved-Collar-Designers-Mens-Formal-Shirts-Quality-Pin-Check-Social-Shirt-Male.jpg_640x640.jpg">
            <h3>Paul jones shirt's</h3>
            <p>Price: Rs 3600.00
            <a href="add_to_cart.php?id=Paul"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://ae01.alicdn.com/kf/HTB14v8MPXXXXXavXFXXq6xXFXXX6/2017-Men-Long-Sleeve-White-Dress-Shirt-High-Quality-Fashion-Brand-4XL-5XL-Formal-Shirts-for.jpg_640x640.jpg">
            <h3>Desirable Times</h3>
            <p>Price: Rs 2000.00
            <a href="add_to_cart.php?id=Luis Phil"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://ae01.alicdn.com/kf/HTB11KkSLVXXXXa8XXXXq6xXFXXXg/Langmeng-2016-Big-size-New-Mens-Shirt-Casual-Shirt-Slim-Fit-Formal-Shirt-Social-corduroy-collar.jpg_640x640.jpg">
            <h3>LANGMENG</h3>
            <p>Price: Rs 2500.00
            <a href="add_to_cart.php?id=John Zok"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
            <img class="img-responsive" src="https://s-media-cache-ak0.pinimg.com/736x/f7/80/76/f7807618e5c6725284b01eb88843a2f5.jpg">
            <h3>Jenson Samuel</h3>
            <p>Price: Rs 36000.00
            <a href="add_to_cart.php?id=Jhalsani"><input type="button" class="btn btn-primary btn-block" value="Add to Cart"></a>
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
