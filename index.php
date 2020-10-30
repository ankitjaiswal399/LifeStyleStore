<!DOCTYPE html>

<html>
  <head>
        <title>Lifestyle Store</title>
        <link href="C:\Users\ankit\Desktop\index.css" rel="stylesheet" type="text/css">
        <style>
        body{
            width: 100%;
            height: 100%;
            margin: 0;
        }

        a{
            text-decoration: none;
            background-color: transparent;
            color:#ededed;
        }

        .header{
                background-color:#000;
                color:#fff;
                border-color: #080808;
                min-height: 50px;
                border: 1px solid transparent;

        }

        .inner-header{
                width:95%;
                margin:auto;
                float: right;
                font-size:14px;
                height: 50px;
                padding: 15px 15px;
                font-size:16px;
                font-weight: bold;
        }

        .logo{
            float: left;
            height: 15px;
            padding: 2.5px;
            font-size: 20px;
            font-weight: bold;
        }

        .header-link {
               float:right;
               font-size:14px;
               height: 50px;
               padding: 15px 15px;
               font-size:16px;
               font-weight: bold;
        }

        .banner-image{
               padding-bottom: 50px;
               margin-bottom: 20px;
               text-align: center;
               color: #f8f8f8;
               background: url(image.jpg) no-repeat center;
               background-size: cover;
        }

        .inner-banner-image{

          padding-top: 12%;
          width:80%;
          margin:auto;
        }

        .banner-content{

              position: relative;
              padding-top: 6%;
              padding-bottom: 6%;
              overflow:hidden;
              margin-bottom: 12%;
              background-color: rgba(0, 0, 0, 0.7);
              max-width: 660px;
        }

        .button{
              color: #fff;
              background-color: #c9302c;
              border-color: #ac2925;
              box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
              padding: 10px 16px;
              font-size: 18px;
              border-radius: 6px;
        }

        .container{
              width:90%;
              margin:auto;
              overflow:hidden;
        }

        .item{
              width:30%;
              display: block;
              padding: 4px;
              margin-bottom: 20px;
              line-height: 1.42857143;
              background-color: #fff;
              border: 1px solid #ddd;
              border-radius: 4px;
              float:left;
              margin-left:1%;
        }

        .thumbnail{
             display: block;
             max-width:360px;
             height: 300px;

        }

        .caption{
             color:#000;
             padding:0px 10px 10px;
             font-weight: bold;
             text-align: center;
        }

        .footer{
             background-color: #000;
             color:#fff;
             font-size:14px;
        }

        .image{
            height:250px;
            width:250px;
        }

        </style>
  </head>

  <body>
    <div class="header">
            <div class="inner-header">
                <div class="logo">
                    <a href="index1.php">Lifestyle Store</a>
                </div>
                <div class="header-link">
                    <a href="signup.php">Sign Up</a>
                </div>
                <div class="header-link">
                    <a href="login.php">Login</a>
                </div>


            </div>
    </div>

    <div class="content">
            <div class="banner-image">
              <div class="inner-banner-image">
                <center>
                <div class="banner-content">
                  <h1> We sell lifestyle </h1>
                  <p>Flat 40% OFF on premium brands</p>
                  <a href="login.php" class="button">shop Now</a>
                </div>
                </center>
              </div>
            </div>
    </div>

        <div class="container">

          <div class="item">
            <a href="login.php">
               <img src="https://cdn.gearpatrol.com/wp-content/uploads/2013/02/how-to-do-it-header-gear-patrol.jpg" class="thumbnail" alt="watch">
               <div class="caption">
               <h2>watches</h2>
               <p>Original watches from the best brands.</p>
               </div>
            </a>
          </div>

          <div class="item">
            <a href="login.php">
               <img src="dslr.jpg" class="thumbnail" alt="Cameras">
               <div class="caption">
               <h2>Cameras</h2>
               <p>Choose among the best available in the world.</p>
               </div>
            </a>
          </div>

          <div class="item">
            <a href="login.php">
               <img src="http://img1.exportersindia.com/product_images/bc-full/dir_100/2990897/formal-shirts-1057841.jpg" class="thumbnail" alt="Shirts">
               <div class="caption">
               <h2>Shirts</h2>
               <p>Our exclusive collection of shirts.</p>
               </div>
            </a>
          </div>
        </div>

    <div class="footer">
      <div class="conatainer">
        <p align="center">Copyright &copy; Lifestyle store. All Rights Reserved | Contact Us: +91 9893251852.</p>
      </div>
    </div>
  </body>
</html>
