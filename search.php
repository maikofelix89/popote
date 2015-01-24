<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popote Listings</title>



    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/landing.css">

    <!-- bootstrap date-picker css -->

    <link rel="stylesheet" href="bootstrap-datepicker/css/datepicker.css">

    
    

    <!-- fonts -->
    <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    


  </head>
  <body>
 <div class="row" id="content">
 	<h2 align="center">Search results</h2>
 </div>
 <div class="row">
 	<div class="container">
 		
 <div class="col-md-12">

<?php
include_once('header/landing_header.php');
include('connection/connection.php');


$location=$_POST['location'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$no_of_guests=$_POST['no_of_guests'];

echo $checkin;
echo $checkout;



                                                        
$sql="SELECT * FROM listings WHERE checkin <= '$checkout'  and checkout >= '$checkin' and city LIKE '%$location%' and no_guests>='$no_of_guests'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
echo "<div class='row'>Your query returned ".$count." listings </div>";

while($row=mysql_fetch_array($result)){
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
     $no_guests=$row['no_guests'];

    $mainphoto=substr($photo1,3);
    echo "

<div class='col-md-3'>
    
       
           <div class='thumbnail' id='otherlistingthumb'>
           
           
            <a href='listing/listing_details.php?id=".$id."'><img src='".$mainphoto."' class='img-responsive' /></a>
            <div class='caption'>
            <p>".$city."</p>
            <p>".$per_night."".$currency."".$pricing_method."</p>
            <p>Available from :".$checkin."</p>
            <p>Available To :".$checkout."</p>
            <p>Guest Space :".$no_guests."</p>

           </div>
            </div>

           
        
  

</div>";
}


?>
</div>
</div>
</div>

</body>
</html>