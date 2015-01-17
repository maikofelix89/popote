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
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <style type="text/css">
    #content{
    	margin-top: 100px;
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

<?php if (isset($_SESSION['usrnm'])) {

$id=$_GET['id'];

$sql="SELECT * FROM `listings` WHERE id='$id'";
$result=mysql_query($sql);




while($row=mysql_fetch_array($result)){
   $GLOBALS['user_id'] =$row['user_id']; 



$sql2="SELECT * FROM `perm_user` WHERE perm_id='$user_id'";
$result2=mysql_query($sql2);
while($row2=mysql_fetch_array($result2)){
    $GLOBALS['fname']=$row2['fname'];
    $pic=$row2['pic'];
    $tel=$row2['tel_no'];
    $email=$row2['email'];
    $lname=$row2['lname'];
   
   

    }
}
    ?>

	<?php echo "<img src='".$pic."'   class='img-responsive img-rounded' alt='user has no image yet'/><br>
    Name: ".$fname."&nbsp".$lname."<br>
    Tel no: ".$tel."<br>
    Email: ".$email."<br></br>
    <div class='btn btn-primary btn-lg' data-target='#myModal' data-toggle='modal'>Message Owner</div>
    


    "


    ; }

    else{
        echo "you need to login to view host details";


}?>
			</div>
		</div>
         <div class="panel panel-default">
              <div class="panel-heading">Amenities</div>
              <div class="panel-body">
                <ul>
                    <li>TV</li>
                    <li>Internet</li>
                    <li>Air conditioning</li>
                    <li>Washer</li>
                    <li>Drier</li>
                    <li>Swimming pool</li>
                    <li>Towels</li>
                    <li>Cable Tv</li>
                    

                </ul>
                    
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
	$listing_id=$row['id'];
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
    $user_id=$row['user_id'];
   $GLOBALS['user_id'] =$user_id; 


    
    
    echo" <h3>".$home_type."</h3>
            <div class='row'>
            
            
            <img src='".$photo2."'  height='150' width='33%' />
            <img src='".$photo3."'  height='150' width='33%' />
            <img src='".$photo1."'  height='150' width='33%' />
           


            
            </div>
            <hr class='intro-divider' />";

           
}



?> 
				   <h2>Description</h2>
				   <p><?php echo $description ?></p>
                   <table>
                    <tr>
                   <td>Accomodates <i class="fa fa-users fa-fw"></i> 5 People &nbsp</td>
                   <td></rd>
                   <td>Beds 3 &nbsp</td>
                   <td>Bathrooms 3 &nbsp</td>
                   <td>Kitchen 1 &nbsp</td>
                   <td>Rooms 5 &nbsp</td>
                   </tr>
                   </table>
				   <hr class="intro-divider" />
	        <?php echo "
            <p>Available from :".$av_date."</p>
            <p>Room type: ".$room_type."</p>
            <p>Location: ".$city."</p>
            <p>Availability:Yes</p>
            <p>Pricing:".$per_night."".$currency."</p>
        "; ?>
				  </div>
			</div>
			<!--	<div class="panel panel-default">
			  <div class="panel-heading">Other Listings by the User</div>
			  <div class="panel-body">
				    
				  </div>
			</div> -->


	   </div>
	</div>
    <div class="panel panel-default">
              <div class="panel-heading">Rules</div>
             
              <div class="panel-body">
                     <ol>
                <li>No pets</li>
                <li>No smoking inside</li>
                <li>No Parties</li>
                <li>No Fighting</li>
               
              </ol>
                  </div>
            </div>


 </div>

 <div class="row">
    <h1 align="center">Reviews</div>
    <hr class="intro-divider" />
    <div class="col-md-4">
       
    </div>
    <div class="col-md-8">
            
    </div>
</div>
   

<!-- message modal -->

    

    <!-- Button HTML (to Trigger Modal) -->

   

     

    <!-- Modal HTML -->

    <div id="myModal" class="modal fade">
        <div class="container">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title">Send Message</h4>

                </div>

                <div class="modal-body">

                    

    <form role="form" id="message_form" class="form-horizontal" action="../message/message.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">

            
            <?php if (isset($_SESSION['usrnm'])) {

         echo  "<label for='inputEmail'>To:</label><input type='text' class='form-control' id='inputEmail' name='fname' value='".$fname."' readonly />";}

            else{ echo "please log in to send message";

         } ?>

         
            

        </div>
        <div class="form-group" style="display:none">
             <?php echo  "<input type='text' class='form-control' id='inputEmail' name='from' value='".$_SESSION['id']."' />"; ?>
              <?php echo  "<input type='text' class='form-control' id='inputEmail' name='to' value='".$user_id."' />"; ?>
           
        </div>

        <div class="form-group">

            <label for="textarea"></label>

            <textarea class="form-control" id="message" name="message">
            	
            </textarea>

            

        </div>
     <?php if (isset($_SESSION['usrnm'])) {

        
        echo "<button type='submit'  class='btn btn-danger custom-btn-submit' id='submit-btn'>Send Message</button>";

    }
    else{
            echo"";
    }?>

    </form>



                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    

                </div>

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