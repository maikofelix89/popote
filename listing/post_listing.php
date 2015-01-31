<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listings</title>

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
 
 <!-- bootstrap date-picker css -->

<link rel="stylesheet" href="../bootstrap-datepicker/css/datepicker.css">
    
  <!-- jasny -->
     <link href="../jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" media="screen">
    <link href="../jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<?php include("../header/header.php"); 

  if (!isset($_SESSION['usrnm'])) {

  header('location:../login/alt_login.php');


  } ?>


    <div class="row">
    <div class="container">
    	

    	<div class=" col-md-offset-2 col-md-8">
    <form role="form" id="myform" class="form-horizontal" action="post.php" method="POST" enctype="multipart/form-data">


                                


                        <div id="form_panel" class="panel-body">
                        <h1 align="middle">Post a Listing</h1>
                        <hr class="intro-divider" />
                    <div id="sign-up-error" class="col-md-10 col-md-offset-1 alert-danger hidden"></div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="f_name">Hometype</label>
                        <div class="col-md-6">
                        <select class="form-control" name="hometype">
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
                    <div class="form-group">
                            <label class="col-md-4 control-label" for="l_name">Room Type:</label>
                        <div class="col-md-6">
                            <select class="form-control" name="roomtype">
                             <option>Entire</option>
                             <option>Shared room</option> 
                             <option>Private room</option> 
                             <option>Other</option> 
                            </select>
                           
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="col-md-4 control-label" for="username">No of Guests</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="no_of_guests">
                            
                        </div>
                                                    
                    </div>
                    
                    <div class="form-group">
                            <label class="col-md-4 control-label" for="password">City</label>
                        <div class="col-md-6">
                            <select class="form-control" name="city">
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
                    <div class="form-group">
                           <label class="col-md-4 control-label" for="r_password">Available From</label>
                        <div class="col-md-6">
                            <input id="demo1" name="date"  class="form-control" type='text' data-provide="datepicker" size='25'>
                            
                           </input>

                            </div>
                                                
                            </div>
                   
                    <div class="form-group">
                           <label class="col-md-4 control-label" for="r_password">Available until</label>
                        <div class="col-md-6">
                            <input id="demo2" name="date2"  class="form-control" type='text' data-provide="datepicker" size='25'>
                            
                           </input>

                            </div>
                                                
                            </div>
                   
                     <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Pricing method</label>
                        <div class="col-md-6">
                            <select class="form-control" name="pricing">
                                <option>Weekly</option>
                                <option>Daily</option>
                                <option>Hourly</option>
                                
                            </select>
                                                </div>
                                                
                                                </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="password">Currency</label>
                        <div class="col-md-6">
                            <select class="form-control" name="currency">
                                <option>Kenyan Shilling</option>
                                <option>US dollars</option>
                                <option>British Pounds</option>
                                
                            </select>
                                                </div>
                                                
                                                </div>

                                <div class="form-group">
												<label class="col-md-4 control-label" for="r_password">Pricing per night</label>
												
									<div class="col-md-6">
                                       <input type="text" class="form-control" name="per_night"/>
                            
                                    </div>		
								</div>
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

               <div class="form-group" id="item-photos-main" >
                        <div class="col-md-offset-4 col-md-6">
                               <div class="fileinput fileinput-new" data-provides="fileinput"  >
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                              <img data-src="holder.js/100%x100%" alt="">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"  style="max-width: 200px; max-height: 150px;"></div>
                            <div>
                                <span class="btn btn-primary btn-file" ><span class="fileinput-new" >Select image</span><span class="fileinput-exists">Change</span><input type="file" name="photo2" id="photo2"></span>
                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                       
                       </div>

               <div class="form-group" id="item-photos-main" >
                    <div class="col-md-offset-4 col-md-6">

                               <div class="fileinput fileinput-new" data-provides="fileinput"  >
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                              <img data-src="holder.js/100%x100%" alt="">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"  style="max-width: 200px; max-height: 150px;"></div>
                            <div>
                                <span class="btn btn-primary btn-file" ><span class="fileinput-new" >Select image</span><span class="fileinput-exists">Change</span><input type="file" name="photo3" id="photo2"></span>
                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                       
                       </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="input-detail-label">Accomodation description:</label>
                <div class="row col-xs-8">
                  <textarea class="form-control input-sm" rows="3" name="acc_details" id="material-offer-details" placeholder="Give your offer description"></textarea>
                </div>
              </div>
             <?php echo "<div class='form-group' style='display:none'>
                        <label class='col-md-4 control-label'></label>
                        
                  <div class='col-md-6'>
                                       <input type='text' class='form-control' name='id' value=".$_SESSION['id']." /> 
                            
                                    </div>    
                </div>"; ?>
                                             
                                               
                        
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="sumit"></label>
                          <button type="submit"  class="btn btn-danger custom-btn-submit" id="submit-btn">Submit</button>                
                                           
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

<!-- bootstrap date-picker js -->

    <script src="../bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

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