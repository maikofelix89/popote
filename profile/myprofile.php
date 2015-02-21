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
	<?php include_once('../header/header.php'); ?>
    <div class="row">
    <div class="container" id="content">
    	<div class="col-md-3" id="sidemenu">
    		<ul class="nav nav-pills nav-stacked">
                <li ><a href="index.php">Edit Profile</a></li>
                <li ><a href="photo.php">Photo</a></li>
                <li class="active"><a href="myprofile.php">My Profile</a></li>
                 <ul  class="nav nav-pills nav-stacked">
                 <li ><a href="my_reservations.php">My Reservations on other's listings</a></li>
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
    $pic=$row['pic'];
    $tel=$row['tel_no'];
   

}

   

?>
    	<div class="col-md-8">

            <h1>My Profile</h1>
            <hr class="intro-divider" />
            <div class="panel panel-default">
              <div class="panel-heading"></div>
              
              
          
              <div class="panel-body">
                <div class="col-md-4">
                <div class="thumbnail">
                <div class="caption">
            <?php echo "<img src='".$pic."' class='img-rounded' />"; ?>

                </div>
               </div>
              </div>
              <div class="col-md-8">
                <p>Name : <?php echo $fname." ".$l_name; ?></p>
                <p>Email : <?php echo $email; ?></p>
                <p>Tel : <?php echo $tel; ?></p>
                <p>Name : <?php echo $fname." ".$l_name; ?></p>
                 <p><br></br>
                 <blockquote>
                     I am very awesome
                 </blockquote> 

                 </p>
              </div>
              </div>
            </div>
    		
    	</div>
    </div>
    </div>

</body>
</html>