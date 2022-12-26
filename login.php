

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
require("common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<html>
    <head>
        <title>Lifestyle store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <?php include 'header.php';?>
        </div>
        <br>
        <br>
         <div class="container">
             
         <div class="row row style">
            
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>LOGIN</h1>
                        </div>
                        <div class="panel-body">
                            <form action="login_submit.php" method="POST">
                            <p class="text-warning">Login to make a purchase</p><br>
                            <label>USERNAME</label><br>
                            <input type="text" name="email"><br><br>
                            <label>PASSWORD</label><br>
                            <input type="text" name="password"><br><br>
                            <button type="submit" class="btn btn-primary">Login</button>
                            
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account?  </p>
                            <a href="signup.php">Register</a>
                        </div>
                       </div>
                </div>
             
            </div>
                 
        </div>
        <div>
               <?php include 'footer.php';?> 
        </div>
    </body>
</html>
