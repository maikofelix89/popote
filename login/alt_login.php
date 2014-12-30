<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popote Listings</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <!-- popote css -->
    <link href="../css/mystyle.css" rel="stylesheet">
    <link href="../css/nav.css" rel="stylesheet">

    <!-- fonts -->
    <link href="../font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- goofle fonts -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

    <style type="text/css">
    #content{
    	margin-top: 100px;
    }
     #host img{
        max-height: 200px;
        width:50%;
    }
    </style>

  </head>
  <body>

<?php include_once('../header/header.php'); ?>
<div class="container" id="content">
    <div class="row">
        <div class="col-md-5">
            <img src="../images/logo.png" class="img-responsive" />
        </div>
    <div class="col-md-5">
        <h1 align="center">Login</h1>
        <hr class="intro-divider"  />
        <form action="login.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="inputEmail">Username</label>
                              <input type="text" class="form-control" name="usrnm" id="inpuusername" placeholder="username">
                          </div>
                          <div class="form-group">
                              <label for="inputPassword">Password</label>
                              <input type="password" name="pswd" class="form-control" id="inputPassword" placeholder="Password">
                          </div>
                          
                          <button class="btn btn-success btn-lg" type="submit" >Login</button>
                    </form>

    </div>
</div>
</div>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-1.11.0.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    
  </body>
</html>