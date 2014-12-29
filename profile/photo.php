<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

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

    <!-- jasny -->
     <link href="../jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" media="screen">
    <link href="../jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
  <?php include_once('../header/header.php'); ?>
    <div class="row">

    <div class="container">
      <div class="col-md-3" id="sidemenu">
        <ul class="nav nav-pills nav-stacked">
    <li><a href="#">Edit Profile</a></li>
    <li class="active"><a href="../profile/photo.php">Photo</a></li>
    
    <li><a href="#">Verification</a></li>
    <li><a href="#">Reviews</a></li>
</ul>
      </div>
<?php
require_once('../connection/connection.php');
$my_id=$_SESSION['id'];


$sql="SELECT * FROM `perm_user` WHERE perm_id='$my_id'";
$result=mysql_query($sql);




while($row=mysql_fetch_array($result)){

    $GLOBALS['fname']=$row['fname'];
    $l_name=$row['lname'];
    $username=$row['usrnm'];
    $email=$row['email'];
    $password=$row['pswd'];

}

   

?>
      <div class="col-md-8">

        <form role="form" id="myform" class="form-horizontal" action="../profile/update_pic.php" method="POST" enctype="multipart/form-data">
            <h1 align="center">Profile Pic</h1>
            <hr class="intro-divider">

            <div class="form-group" id="item-photos-main" >
                            <div class="col-md-offset-4 col-md-6">
                               <div class="fileinput fileinput-new" data-provides="fileinput"  >
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                              <img data-src="holder.js/100%x100%" alt="">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"  style="max-width: 200px; max-height: 150px;"></div>
                            <div>
                                <span class="btn btn-primary btn-file" ><span class="fileinput-new" >Select image</span><span class="fileinput-exists">Change</span><input type="file" name="photo1" id="photo1"></span>
                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                       
                       </div>
                       <div class="form-group">
                        <div class="col-md-offset-3 col-md-6">
                                            <label class="col-md-4 control-label" for="sumit"></label>
                                            <button type="submit"  class="btn btn-danger custom-btn-submit" id="submit-btn">Update</button>                
                                           
                                        </div>
                                    </div>


                                


                                       
                                </form>
      </div>
    </div>
    </div>




  <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script language="javascript" type="text/javascript" src="../datepicker/datetimepicker.js"></script>


<!-- jasny -->
    <script src="../jasny-bootstrap/js/jasny-bootstrap.js"></script>
    <script src="../jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
</body>
</html>