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

    .thumbnail img{
      height:auto !important;
    }

    #visa-option,#mpesa-option{



    }


    </style>

   
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
                <li ><a href="../profile/photo.php">Photo</a></li>
                <li ><a href="../profile/myprofile.php">My Profile</a></li>
                <ul  class="nav nav-pills nav-stacked">
                 <li class="active"><a href="my_reservations.php">My Reservations on other's listings</a></li>
                 <li><a href="others_reservations.php">Reservations on my listing</a></li>
                </ul>
            </ul>
    	</div>

        <div class="col-md-8" id="content">
          <h2 align="center">Choose your Payment Method</h2>
          <hr class="intro-divider" />
          <div class="row">
           <div class="col-sm-4">
                <div class="thumbnail" id="mpesa-option">
                   
                   <div class="caption">
                       <h3>Mpesa</h3>
       
                   </div>
                   <div id="mg-image">
                   <img src="../images/mpesa.jpg" class="img-responsive"  alt="..."/>
                   </div>
                   <button class="btn btn-primary" id="mpesabtn" onClick="$('#mpesa-submision').toggle('slow')">Pay</button>
                </div>
            </div>


            <div class="col-sm-4">

                <div class="thumbnail" id="visa-option">
                  
                     <div class="caption">
                         <h3>Visa</h3>
        
                     </div>
                     <div id="mg-image">
                     <img src="../images/visa2.jpg" class="img-responsive"  alt="...">
                     </div>
                     <button class="btn btn-primary" id="visa-option-btn"> Pay</button>
                 </div>
            </div>


            <div class="col-sm-4">
               <div class="thumbnail"  id="mastercard-option">
                 
                    <div class="caption">
                       <h3>Master Card</h3>
        
        
                    </div>
                    <div id="mg-image">
                    <img src="../images/master_card.jpg" class="img-responsive"  alt="..."/>
                    </div>
                    <button class="btn btn-primary" id="mastercard-option-btn"> Pay</button>
               </div>
            </div>


           <div class="col-sm-4">
                <div class="thumbnail" id="airtel-option">
                    
                      <div class="caption">
                         <h3>Airtel</h3>
        
                      </div>
                      <div id="mg-image">
                      <img src="../images/airtel.jpg"  class="img-responsive"  alt="..."/>
                      </div>
                      <button class="btn btn-primary" id="airtelbtn" onClick="$('#airtel-submision').toggle('slow')"> Pay</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail" id="paypal-option">
                    
                      <div class="caption">
                         <h3>PayPal</h3>
        
                      </div>
                      <div id="mg-image">
                      <img src="../images/paypal.jpg"  class="img-responsive"  alt="..."/>
                      </div>
                      <button class="btn btn-primary" id="paypal-option-btn"> Pay</button>
                </div>
            </div>
          </div>



    </div>
    </div>
  </div>




	
</body>
</html>