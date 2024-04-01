<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.jpg" />
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
            <div id="bannerImage1">
            <div class="container">
                <div class="jumbotron">
                <div id="bannerContent1">
                    <h1><center>Welcome to our WoodWork!</center></h1>
                    <p>We have the best Furniture,  classic decors  for you. No need to hunt around, we have all in one place.</p>

                </div>
            </div>
            <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="desk.php">
                                <img src="img/table.jpg" alt="Desks">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Desks</p>
                                        <p> Durable and reliable, a wooden office Desk is always a winner.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <!-- <div class="col-xs-4"> -->
                       <div class="thumbnail">
                           <a href="chair.php">
                               <img src="img/chairs0.jpg" alt="Chair">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Chairs</p>
                                    <p>Classy and comfy collection of executive office Chairs.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="decor.php">
                               <img src="img/decor.jpg" alt="Decor">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Decors</p>
                                   <p>From office wall decor to desk accessories, find everything you need to style your office.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center> 
               </center>
               </div>
           </footer>
        </div>
        </body>
</html>