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

   

    <style type="text/css">
    #content{
        margin-top: 50px;
    }

    
    </style>
</head>

<body>
	<?php include('../header/header.php'); 

   if (!isset($_SESSION['usrnm'])) {

  header('location:../login/login.php');


  }



  ?>

    <div class="row" id="content">
    <div class="container">
    	

    	<div class=" col-md-offset-1 col-md-8">
        <h1 align="center">Listings</h1>

        <hr class="intro-divider" />
    
    </div>

  </div>
</div>
<div class="row">
  <div class="container">
    <?php
    include_once("../connection/connection.php");

  $MAX_REC_PER_PAGE=9;
  
  $rs = mysql_query("SELECT COUNT(*) FROM listings") or die("Count query error!");
  list($total) = mysql_fetch_row($rs);
  $total_pages = ceil($total / $MAX_REC_PER_PAGE);
  $page = intval(@$_GET["page"]); 
  if (0 == $page){
  $page = 1;
  }  
  $start = $MAX_REC_PER_PAGE * ($page - 1);
  $max = $MAX_REC_PER_PAGE;
  $rs = mysql_query("SELECT * FROM listings ORDER BY id 
   ASC LIMIT $start, $max") or die("query error!");
 

 
  while ($row=mysql_fetch_array($rs)) {


    $id=$row['id'];
    $home_type=$row['home_type'];
    $room_type=$row['room_type'];
    $city=$row['city'];
    $currency=$row['currency'];
    $per_night=$row['per_night'];
    $pricing_method=$row['pricing_method'];
     $photo1=$row['photo1'];
    $photo2=$row['photo2'];
    $checkin=$row['checkin'];
    $checkout=$row['checkout'];

  
  
echo "
<div class='col-md-4'>
    <div class='thumbnail'>
        <div class='caption'>
            <h3>".$home_type."</h3>
            <img src='".$photo1."' class='img-responsive' />
            <hr class='intro-divider' />
            <p>Available from :".$checkin."</p>
            <p>Available To :".$checkout."</p>
            <p>Room type: ".$room_type."</p>
            <p>Location: ".$city."</p>
            <!-- <p>Availability:Yes</p> -->
            <p>".$per_night."". $currency."".$pricing_method."</p>
        <a href='listing_details.php?id=".$id."' class='btn btn-primary btn-lg'>Details</a>
        </div>
    </div>

</div>";

}
?>


</div>
</div>
<table border="0" cellpadding="5" cellmargin="10" align="center">
  <tr>
  <td>Goto Page :</td>
  <?php
  for ($i = 1; $i <= $total_pages; $i++) {
  $txt = $i;
  if ($page != $i)
  $txt = "<a href=\"" . $_SERVER["PHP_SELF"] . "?page=$i\">$txt</a>";
  ?>  
  <td align="center" class="btn btn-success btn-lg"><?= $txt ?></td>
  <?php
  }
  ?>
  
  
  



</body>
</html>