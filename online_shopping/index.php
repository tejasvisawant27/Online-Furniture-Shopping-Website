<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg"/>
        <title>WoodWork</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>WoodWorks</h1>
                       <p>Decor the dreams with wood beauty</p>
                       <a href="products.php" class="btn btn-default">Shop Now</a>
                   </div>
                   </center>
               </div>
</div>         

<section class="about">
   <div class="flex">
      </div>
      <div class="content">
      </div>
   </div>
</section>
<section class="home-contact">
   <div class="content">
   </div>

</section>

      
           

           <?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
    </body>
</html>