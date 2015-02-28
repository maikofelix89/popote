<?php
session_start();
if (!isset($_SESSION['usrnm'])) {

  header('location:../login/alt_login.php');


  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listings</title>

    <?php include_once('../header/common.php'); ?>
    <!-- popote css -->
    <link href="../css/mystyle.css" rel="stylesheet">
    <link href="../css/nav.css" rel="stylesheet">

   
 
 
    
  
</head>

<body>
	<?php include("../header/header2.php"); 

   ?>


    <div class="row">
    <div class="container">

    <?php
    include_once("../connection/connection.php");

    $listing_id=$_GET['id'];

    $sql="SELECT * FROM listings WHERE id='$listing_id'";
    $result=mysql_query($sql);

    while($row=mysql_fetch_array($result)){

    $id=$row['id'];
    $user_id=$row['user_id'];
    $home_type=$row['home_type'];
    $room_type=$row['room_type'];
    $city=$row['city'];
    $currency=$row['currency'];
    $per_night=$row['per_night'];
    $pricing_method=$row['pricing_method'];
    $photo1=$row['photo1'];
    $checkin=$row['checkin'];
    $checkout=$row['checkout'];
    $no_guests=$row['no_guests'];
    $description=$row['description'];

    

    
    	

    	echo "<div class=' col-md-offset-2 col-md-8'>
    <form role='form' id='myform' class='form-horizontal' action='update_listing.php' method='POST' enctype='multipart/form-data'>


                                


                        <div id='form_panel' class='panel-body'>
                        <h1 align='middle'>Edit Listing</h1>
                        <hr class='intro-divider' />
                    <div id='sign-up-error' class='col-md-10 col-md-offset-1 alert-danger hidden'></div>
                    <div class='form-group'>
                        <label class='col-md-4 control-label' for='f_name'>Hometype</label>
                        <div class='col-md-6'>
                        <select class='form-control' name='hometype' value='".$home_type."'>
                         <option>Apartment</option>
                         <option>Mansion</option> 
                         <option>Sleeping Bag</option> 
                         <option>Treehouse</option> 
                         <option>Cabin</option>
                         <option>Manyatta</option> 
                         <option>Villa</option> 
                         <option>SQ</option> 
                         <option>Bungalow</option>
                         <option>Bedsitter</option>
                         <option>Other</option>    
                        </select>
                        </div>
                    </div>
                    <div class='form-group'>
                            <label class='col-md-4 control-label' for='l_name'>Room Type:</label>
                        <div class='col-md-6'>
                            <select class='form-control' name='roomtype'>
                             <option>Entire</option>
                             <option>Shared room</option> 
                             <option>Private room</option> 
                             <option>Other</option> 
                            </select>
                           
                        </div>
                    </div>
                    <div class='form-group'>
                            <label class='col-md-4 control-label' for='username'>No of Guests</label>
                        <div class='col-md-6'>
                            <input type='text' class='form-control' name='no_of_guests' value='".$no_guests."'>
                            
                        </div>
                                                    
                    </div>
                    
                    <div class='form-group'>
                            <label class='col-md-4 control-label' for='password'>City</label>
                        <div class='col-md-6'>
                            <select class='form-control' name='city' value='".$city."'>
                                <option>Nairobi</option>
                                <option>Nakuru</option>
                                <option>Kisii</option>
                                <option>Kisumu</option>
                                <option>Mombasa</option>
                                <option>Nanyuki</option>
                                <option>Naivasha</option>
                                <option>Thika</option>
                            </select>
                                                </div>
                                                
                                                </div>
                    <div class='form-group'>
                           <label class='col-md-4 control-label' for='r_password'>Available From</label>
                        <div class='col-md-6'>
                           <input type='text' class='form-control' id='date' name='date' data-provide='datepicker' placeholder='Available from'>
                            
                           </input>

                            </div>
                                                
                            </div>
                   
                    <div class='form-group'>
                           <label class='col-md-4 control-label' for='r_password'>Available until</label>
                        <div class='col-md-6'>
                           <input type='text' class='form-control' id='date2' name='date2' data-provide='datepicker' placeholder='Available to'>
                            
                           </input>

                            </div>
                                                
                            </div>
                   
                     <div class='form-group'>
                            <label class='col-md-4 control-label' for='password'>Pricing method</label>
                        <div class='col-md-6'>
                            <select class='form-control' name='pricing'>
                                <option>Weekly</option>
                                <option>Daily</option>
                                <option>Hourly</option>
                                
                            </select>
                                                </div>
                                                
                                                </div>
                            <div class='form-group'>
                            <label class='col-md-4 control-label' for='password'>Currency</label>
                        <div class='col-md-6'>
                            <select class='form-control' name='currency'>
                                <option>Kenyan Shilling</option>
                                <option>US dollars</option>
                                <option>British Pounds</option>
                                
                            </select>
                                                </div>
                                                
                                                </div>

                                <div class='form-group'>
												<label class='col-md-4 control-label' for='r_password'>Pricing per night</label>
												
									<div class='col-md-6'>
                                       <input type='text' class='form-control' name='per_night' value='".$per_night."'/>
                            
                                    </div>		
								</div>
                        <div class='form-group' id='item-photos-main' >
                            <div class='col-md-offset-4 col-md-6'>
                               <div class='fileinput fileinput-new' data-provides='fileinput'  >
                            <div class='fileinput-new thumbnail' style='width: 200px; height: 150px;'>
                              <img data-src='holder.js/100%x100%' alt=''>
                            </div>
                            <div class='fileinput-preview fileinput-exists thumbnail'  style='max-width: 200px; max-height: 150px;'></div>
                            <div>
                                <span class='btn btn-primary btn-file' ><span class='fileinput-new' >Select image</span><span class='fileinput-exists'>Change</span><input type='file' name='photo1' id='photo1'></span>
                                <a href='#' class='btn btn-danger fileinput-exists' data-dismiss='fileinput'>Remove</a>
                            </div>
                        </div>
                    </div>
                       
                       </div>

               <div class='form-group' id='item-photos-main' >
                        <div class='col-md-offset-4 col-md-6'>
                               <div class='fileinput fileinput-new' data-provides='fileinput'  >
                            <div class='fileinput-new thumbnail' style='width: 200px; height: 150px;'>
                              <img data-src='holder.js/100%x100%' alt=''>
                            </div>
                            <div class='fileinput-preview fileinput-exists thumbnail'  style='max-width: 200px; max-height: 150px;'></div>
                            <div>
                                <span class='btn btn-primary btn-file' ><span class='fileinput-new' >Select image</span><span class='fileinput-exists'>Change</span><input type='file' name='photo2' id='photo2'></span>
                                <a href='#' class='btn btn-danger fileinput-exists' data-dismiss='fileinput'>Remove</a>
                            </div>
                        </div>
                    </div>
                       
                       </div>

               <div class='form-group' id='item-photos-main' >
                    <div class='col-md-offset-4 col-md-6'>

                               <div class='fileinput fileinput-new' data-provides='fileinput'  >
                            <div class='fileinput-new thumbnail' style='width: 200px; height: 150px;'>
                              <img data-src='holder.js/100%x100%' alt=''>
                            </div>
                            <div class='fileinput-preview fileinput-exists thumbnail'  style='max-width: 200px; max-height: 150px;'></div>
                            <div>
                                <span class='btn btn-primary btn-file' ><span class='fileinput-new' >Select image</span><span class='fileinput-exists'>Change</span><input type='file' name='photo3' id='photo2'></span>
                                <a href='#' class='btn btn-danger fileinput-exists' data-dismiss='fileinput'>Remove</a>
                            </div>
                        </div>
                    </div>
                       
                       </div>
              <div class='form-group'>
                <label class='col-md-4 control-label' for='input-detail-label'>Accomodation description:</label>
                <div class='row col-xs-8'>
                  <textarea class='form-control input-sm' rows='3' name='acc_details' id='material-offer-details' placeholder='Give your offer description'>".$description."</textarea>
                </div>
              </div>
             <div class='form-group' style='display:none'>
                        <label class='col-md-4 control-label'></label>
                        
                  <div class='col-md-6'>
                                       <input type='text' class='form-control' name='id' value='".$_SESSION['id']."' /> 

                                        <input type='text' class='form-control' name='listing_id' value='".$listing_id."' /> 
                            
                                    </div>    
                </div>
                                             
                                               
                        
                        <div class='form-group'>
                          <label class='col-md-4 control-label' for='sumit'></label>
                          <button type='submit'  class='btn btn-danger custom-btn-submit' id='submit-btn'>Submit</button>                
                                           
                        </div>
                    </form>";

                  }
                    ?>
    	</div>
    </div>
    </div>




	

    






    <script type="text/javascript">
      $('#demo1').datepicker({
   
    startDate: '-d'
})

$('#demo2').datepicker({
   
    startDate: '-d'
})

 
    </script>

</body>
</html>