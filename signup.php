

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div>
            <?php include 'header.php';?>
        </div>
        <br>
        <br>
   <div class="container">           
                <div class="row">
                    <div class="col-xs-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Sign Up</h4>
                            </div>
                            <div class="panel-body">
                                <form action="signup_script.php" method="POST">
                                    <label>Name</label><br>
                <input type="text" name="name" class="form-control"><br>
                <label>Email</label><br>
                <input type="email" name="email"  class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2-3}$"><br>
                <label>Password</label><br>
                <input type="password" name="password"  class="form-control"><br>
                <label>Contact</label><br>
                <input type="number" name="contact"  class="form-control"> <br>
                <label>City</label><br>
                <input type="text" name="city"  class="form-control"><br>
                <label>Address</label><br>
                <input type="text" name="address"  class="form-control"><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>   
                            </div>
                            </div>
                        </div>
      </div>
                    </div>
            </div>
        <br>
        <br>
        <div>
            <?php include 'footer.php';?>
        </div>
    </body>
</html>