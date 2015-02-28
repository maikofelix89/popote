<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

     <?php include_once('../header/common.php'); ?>

    
    <!-- popote css -->
    <link href="../css/mystyle.css" rel="stylesheet">
    <link href="../css/nav.css" rel="stylesheet">

   
</head>

<body>
  <?php include_once('../header/header.php'); 

  if(!isset($_SESSION['id'])){
    header('location:../login/alt_login.php');
}


  ?>
    <div class="row">

    <div class="container">
      <div class="col-md-3" id="sidemenu">
        <ul class="nav nav-pills nav-stacked">
                <li ><a href="../profile/index.php">Edit Profile</a></li>
                <li class="active"><a href="../profile/photo.php">Photo</a></li>
                <li ><a href="../profile/myprofile.php">My Profile</a></li>
                <ul  class="nav nav-pills nav-stacked">
                 <li><a href="my_reservations.php">My Reservations on other's listings</a></li>
                 <li><a href="others_reservations.php">Reservations on my listing</a></li>
                </ul>
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


</body>
</html>