<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popote Listings</title>

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

    <style type="text/css">
    #content{
    	margin-top: 60px;
    }
     #host img{
        max-height: 200px;
        width:50%;
    }
    </style>

  </head>
  <body>
<?php include_once('../header/header.php'); ?>
<div class="container" id="content">
	<div class="row">
		<div class="col-md-4">
		<div class="thumbnail" id="host">
			<div class="caption">
				<h2>Host Details</h2>
				<hr class="intro-divider" />
				<img src="../images/maiko.jpg"   class="img-responsive img-rounded"/>
			</div>
		</div>
	   </div>
	   <div class="col-md-8">
	  
		   	<div class="panel panel-default">
			  <div class="panel-heading">Listing Details</div>
			  <div class="panel-body">
<?php
require_once('../connection/connection.php');
$id=$_GET['id'];

$sql="SELECT * FROM `listings` WHERE id='$id'";
$result=mysql_query($sql);

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
    $photo3=$row['photo3'];
    $av_date=$row['av_date'];
    $description=$row['description'];

    echo" <h3>".$home_type."</h3>
            <div class='row'>
            
            <img src=".$photo1."  height='150' width='auto'>
            <img src=".$photo2."  height='150' width='auto'>
            <img src=".$photo3."  height='150' width='auto'>

            
            </div>
            <hr class='intro-divider' />";

           
}

?> 
				   <h2>Description</h2>
				   <p><?php echo $description ?></p>
				   <hr class="intro-divider" />
	        <?php echo "
            <p>Available from :".$av_date."</p>
            <p>Room type: ".$room_type."</p>
            <p>Location: ".$city."</p>
            <p>Availability:Yes</p>
            <p>Pricing:sh 1000 per night</p>
        <div class='btn btn-primary btn-lg' data-target='#myModal' data-toggle='modal'>Message Owner</div>"; ?>
				  </div>
			</div>
				<div class="panel panel-default">
			  <div class="panel-heading">Other Listings by the User</div>
			  <div class="panel-body">
				    Panel content
				  </div>
			</div>


	   </div>
	</div>


 </div>
   

<!-- message modal -->

    

    <!-- Button HTML (to Trigger Modal) -->

   

     

    <!-- Modal HTML -->

    <div id="myModal" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title">Confirmation</h4>

                </div>

                <div class="modal-body">

                    

    <form>

        <div class="form-group">

            <label for="inputEmail">user</label>

            <input type="email" class="form-control" id="inputEmail" placeholder="Email">

        </div>

        <div class="form-group">

            <label for="textarea">Message</label>

            <textarea class="form-control" id="message" placeholder="Write your message here">
            	
            </textarea>

            

        </div>

        
        <button type="submit" class="btn btn-primary">Send Message</button>

    </form>



                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    

                </div>

            </div>

        </div>

    </div>








      

  

    















    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-1.11.0.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    
  </body>
</html>