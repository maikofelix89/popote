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
<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>

    <!-- jasny -->
     <link href="../jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" media="screen">
    <link href="../jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">

    <style type="text/css">
    #content{
        margin-top: 50px;
    }

    .thumbnail img{
        max-height: 150px;
        width:100%;
    }

    </style>
</head>

<body>
    <?php include_once('../header/header.php'); ?>

    <div class="row" id="content">
    <div class="container">
        

        <div class=" col-md-offset-1 col-md-8">
        <h1 align="center">My Listings</h1>

        <hr class="intro-divider" />
    
    </div>

  </div>
</div>
<div class="row">
  <div class="container">
    <?php
    include_once("../connection/connection.php");

  $MAX_REC_PER_PAGE=3;
  $_SESSION['id']=$user;
  
  $rs = mysql_query("SELECT COUNT(*) FROM listings WHERE user_id=$user ") or die("Count query error!");
  list($total) = mysql_fetch_row($rs);
  $total_pages = ceil($total / $MAX_REC_PER_PAGE);
  $page = intval(@$_GET["page"]); 
  if (0 == $page){
  $page = 1;
  }  
  $start = $MAX_REC_PER_PAGE * ($page - 1);
  $max = $MAX_REC_PER_PAGE;
  $rs = mysql_query("SELECT * FROM listings  WHERE user_id=$user ORDER BY id 
   ASC LIMIT $start, $max") or die("query error!");
 

 
  while ($row=mysql_fetch_array($rs)) {


    $id=$row['id'];
    $user_id=$row['user_id'];
    $home_type=$row['home_type'];
    $room_type=$row['room_type'];
    $city=$row['city'];
    $currency=$row['currency'];
    $per_night=$row['per_night'];
    $pricing_method=$row['pricing_method'];
    $photo2=$row['photo2'];
    $av_date=$row['av_date'];

  
  
echo "
<div class='col-md-4'>
    <div class='thumbnail'>
        <div class='caption'>
            <h3>".$home_type."</h3>
            <img src='../".$photo2."' class='img-responsive' />
            <hr class='intro-divider' />
            <p>Available from :".$av_date."</p>
            <p>Room type: ".$room_type."</p>
            <p>Location: ".$city."</p>
            <p>Availability:Yes</p>
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