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
    <div class="container">
    	<div class="col-md-3" id="sidemenu">
    		<ul class="nav nav-pills nav-stacked">
                <li ><a href="../profile/index.php">Edit Profile</a></li>
                <li ><a href="../profile/photo.php">Photo</a></li>
                <li ><a href="../profile/myprofile.php">My Profile</a></li>
                <ul  class="nav nav-pills nav-stacked">
                 <li class="active"><a href="my_reservations.php">My Reservations on other's listings</a></li>
                 <li><a href="others_reservations.php">Reservations on my listing</a></li>
                </ul>
            </ul>
    	</div>

        <div class="col-md-8" id="content">
<?php
require_once('../connection/connection.php');
$my_id=$_SESSION['id'];


$sql="SELECT * FROM `reservations` WHERE user_id='$my_id'";
$result=mysql_query($sql);




while($row=mysql_fetch_array($result)){


    $res_id=$row['res_id'];
    $listing_id=$row['listing_id'];
    $resfrom=$row['res_from'];
    $resto=$row['res_to'];


    $sql2="SELECT * FROM listings WHERE id='$listing_id'";
    $result2=mysql_query($sql2);

      while ($row2=mysql_fetch_array($result2)) {

           $id=$row2['id'];
           $home_type=$row2['home_type'];
           $room_type=$row2['room_type'];
           $city=$row2['city'];
           $currency=$row2['currency'];
           $per_night=$row2['per_night'];
           $pricing_method=$row2['pricing_method'];
           $photo1=$row2['photo1'];
           $photo2=$row2['photo2'];
           $checkin=$row2['checkin'];
           $checkout=$row2['checkout'];

           echo"

           <div class='panel panel-default col-md-6'>
           <div class='panel-body'>
          
           <p>".$home_type."</p>
           <p>".$per_night.$currency.$pricing_method."</p>
           <p>".$city."</p>
           <p>Available from:". $checkin." To: ".$checkout."</p>
           <hr class='intro-divider' />
           <p>You reservation dates</p>
           <p>Checkin ".$resfrom."</p>
           <p>Check out ".$resto."</p>

           </div>
           <div class='panel-footer'>

           <a href='delete_res.php?res=".$res_id."'>Delete</a>
           <a href='../listing/listing_details.php?id=".$id."'>View Listing</a>


           </div>

           </div>
          



           ";
         
      }

  

}

   

?>
    	
    		
    	</div>
    </div>
    </div>




	
</body>
</html>