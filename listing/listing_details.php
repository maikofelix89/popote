<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popote Listings</title>


     <?php include_once('../header/common.php'); ?>

   
    
    <!-- popote css -->
    <link href="../css/mystyle.css" rel="stylesheet">
    <link href="../css/nav.css" rel="stylesheet">
    
   

    

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
                <h2 align="center">Host Details</h2>
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
              <h2 align="center">Amenities</h2>
              <hr class="intro-divider" />
              <div class="panel-body">
               <?php
               require_once('../connection/connection.php');
               $id=$_GET['id'];

               $sql5="SELECT * FROM `listing_amenities` WHERE listing_id='$id'";

               $result5=mysql_query($sql5);
                $count=mysql_num_rows($result5);

                if($count==0){
                  echo "<a href='amenities.php?id=".$id."' class='btn btn-primary'>Add Amenities</a>";
                }

                else{
                  while($row5=mysql_fetch_array($result5)){
                    $amenities=$row5['amenities'];


                    echo $amenities;

                }
              }


           

               ?>
                    
                  </div>
            </div>
             <div class="panel panel-default">
            <div class="thumbnail">

              <?php if(isset($_SESSION['usrnm'])) {
                echo "
             
               <a href='#resmodal' class='btn btn-lg btn-success' data-toggle='modal'>Reserve</a>";
             }
             else{
              echo "Please Log in to Reserve";
             }
             ?>

            </div>
          </div>

	   </div>
	   <div class="col-md-8">
	  
		   	<div class="panel panel-default">
			  <h2 align="center">Listing Details</h2>
        <hr class="intro-divider" />
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
    $checkin=$row['checkin'];
    $checkout=$row['checkout'];
    $description=$row['description'];
    $user_id=$row['user_id'];
    $no_guests=$row['no_guests'];
   $GLOBALS['user_id'] =$user_id; 


    
    
    echo" 
            <div class='row'>
            <div id='listing_carousel' class='carousel slide' >
  <!-- Indicators -->
  <ol class='carousel-indicators'>
    <li data-target='#listing_carousel' data-slide-to='0' class='active'></li>
    <li data-target='#listing_carousel' data-slide-to='1'></li>
    <li data-target='#listing_carousel' data-slide-to='2'></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class='carousel-inner' role='listbox'>
    <div class='item active'>
       <img src='".$photo1."'alt=''/>
      <div class='carousel-caption'>
       
      </div>
    </div>
    <div class='item'>
      <img src='".$photo2."'alt='' />
      <div class='carousel-caption'>
       
      </div>
    </div>
    <div class='item'>
      <img src='".$photo3."' alt='' />
      <div class='carousel-caption'>
        
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class='left carousel-control' href='#listing_carousel' role='button' data-slide='prev'>
    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
    <span class='sr-only'>Previous</span>
  </a>
  <a class='right carousel-control' href='#listing_carousel' role='button' data-slide='next'>
    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
    <span class='sr-only'>Next</span>
  </a>
</div>
            
            
           
            
           
           


            
            </div>
            <hr class='intro-divider' />";

           
}



?> 

				   <h2 align="center">Description</h2>
           <hr class="intro-divider" />
				   <p><blockquote><i><?php echo $description ?></i></blockquote></p>
                   <table>
                    <tr>
                    <td><p><b>Home type :</b><?php echo $home_type ?></p></td>
                  </tr>
                  <tr>
                   <td><p><b>Accomodates</b> <i class="fa fa-users fa-fw"></i><?php echo $no_guests; ?> People</p> &nbsp </td>
                   <td></rd>
                  
                   </tr>
                   </table>
				   <hr class="intro-divider" />
	        <?php echo "
            <p><b>Available from :</b>".$checkin."</p>
            <p><b>Available from :</b>".$checkout."</p>
            <p><b>Room type: </b>".$room_type."</p>
            <p><b>Location: </b>".$city."</p>
            
            <p><b>Price:</b>" .$per_night."".$currency."</p>
        "; ?>
				  </div>
			</div>

  <div class="panel-default">
    <div class="panel panel-body">

  <h2 align="center">Rate my Place</h2>
  <hr class="intro-divider" />
  <form action="rate.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <p>On a scale of 1-10,1-Terible 10-Superp</p>
      <select name="rating">
       <?php 

      

      
       for ($i = 1; $i <= 10; $i++) {
        echo "<option>".$i."</option>";
       }
       ?>
      </select>


    </div>
    <?php
     

     if(isset($_SESSION['id'])){
      $listing_id=$_GET['id'];
     $user_id=$_SESSION['id'];

       echo "<div class='form-group' style='display:none'>
              <input type='text' class='form-control'  name='user_id' value='".$user_id."' />
              <input type='text' class='form-control'  name='listing_id' value='".$listing_id."' />
           
        </div>

         <div class='form-group'>
      <button type='submit' class='btn btn-danger btn-lg'>Rate</button>
    </div>";
      }
      else{
          echo "You need to log in to rate!";
      }
    ?>
   
  </form>
</div>
  
</div>
			<div class="panel panel-default">
			 
			  <div class="panel-body">
          <h2 align="center">Current Rating</h2>
  <?php

require_once('../connection/connection.php');
$id=$_GET['id'];

$sql="SELECT * FROM `rating` WHERE listing_id='$id'";
$result=mysql_query($sql);
$count_rate=mysql_num_rows($result);
 $total=0;

if($count_rate==0){
  echo "<p>No rating yet</p>";
}
else{
  while ($row=mysql_fetch_array($result)) {



   $rating=$row['rating'];
   $total=$total+$rating;

  }
  $average=$total/$count_rate;
  echo "<h3 align='center'>".$average ."/10</h3><br>
  <h4 align='center'>No of Votes :".$count_rate."

  ";
}

  ?>
				    
				  </div>
			</div>
      

	   </div>
	</div>
  <div class="panel panel-default" id="rules">
     <h2 align="center">Location</h2>
     <hr class="intro-divider" />
     <?php 

      $user_id=$_SESSION['id'];
      $listing_id=$_GET['id'];
      include_once('../connection/connection.php');

       $sql2="SELECT * FROM listing_map WHERE listing_id='$id'";
       $result2=mysql_query($sql2);
       $count2=mysql_num_rows($result2);

      

       

       if($count2==0){

         $sql="SELECT * FROM listings WHERE id='$listing_id'";
         $result=mysql_query($sql) or die(mysql_error());
         $count=mysql_num_rows($result);

              while($row=mysql_fetch_array($result)){
              $user_id=$row['user_id'];

              if($user_id==$_SESSION['id']){
                  echo "<form method='POST' action='add_map.php?id=".$_GET['id']."' enctype='multipart/form-data' id='map_form' style='display:none'>
                  <div class='form-group'>
       
        
      
     
                        <textarea  placeholder='paste the google map embed link here' name='map'></textarea>
                      
                      </div>
                      <div class='form-group'>
                       
                        
                      
                     
                       <button type='submit' class='btn btn-success'>Save </button>
                      
                      </div>
                     </form>";

                      echo "<a class='btn btn-primary' id='map_button'>Add Google map Location</a>";
       }

       else{
        echo "no map has been added yet";
       }
       }
     }
     else{
      while ($row2=mysql_fetch_array($result2)) {
        $map=$row2['link'];
      
      echo $map;
    }

     }


     ?>

     

     
    
  </div>

    <div class="panel panel-default" id="rules">
              <h2 align="center">Rules</h2>
              <hr class="intro-divider" />
             
              <div class="panel-body">
                      <?php
               require_once('../connection/connection.php');
               $id=$_GET['id'];

               $sql5="SELECT * FROM `listing_amenities` WHERE listing_id='$id'";

               $result5=mysql_query($sql5);
                $count=mysql_num_rows($result5);

                if($count==0){
                  echo "<a href='amenities.php?id=".$id."' class='btn btn-primary'>Add Rules</a>";
                }

                else{
                  while($row5=mysql_fetch_array($result5)){
                    $rules=$row5['rules'];

                    echo $rules;

                }
              }


           

               ?>
                  </div>
            </div>


 </div>

 <div class="row">

    <h2 align="center">Reviews</h2>
    <hr class="intro-divider" />
  <div class="container">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">

   
      <?php
      require_once('../connection/connection.php');

      $id=$_GET['id'];
     

      

      $sql4="SELECT * FROM `reviews` WHERE listing_id='$id' LIMIT 0 , 30";
      $result4=mysql_query($sql4) or die(mysql_error());

      while($row4=mysql_fetch_array($result4)){
         $from=$row4['user_id'];
         $review=$row4['review'];
         $date=$row4['date'];
         $GLOBALS['from']=$row4['user_id'];
                        
                        echo "
                      <div class='media'>";
                       
                        
                          

                            $sql2="SELECT * FROM `perm_user` WHERE perm_id='$from'";
                            $result2=mysql_query($sql2);
                            while($row2=mysql_fetch_array($result2)){
                            $GLOBALS['fname']=$row2['fname'];
                            $pic=$row2['pic'];
                           
                      
                       echo"
   <div class='media-body'>
   <div class='col-md-2'>
   <img src='".$pic."' class='img-rounded' height='100' alt='No image' />
   <hr class='intro-divider'>
   ".$fname."
   </div>
   <div class='col-md-10'>".$review."

   </div>
   </div>
    </div>
    <hr class='intro-divider' />

   ";
                       
                       

    }
     
 
   


   


   

}

    
   
         

     
    
      ?>
     
  

        </div>

        <div class="panel panel-default">
            <div class="panel-body">
        <form role="form" id="myform" class="form-horizontal" action="post_review.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
                <label class="col-md-4 control-label" for="input-detail-label">Accomodation Review:</label>
                <div class="row col-xs-8">
                  <textarea class="form-control input-sm" rows="10" col="5"  name="review" placeholder="Give your review"></textarea>
                </div>
          </div>
          <div class="form-group" style="display:none">
             <?php echo  "<input type='text' class='form-control' id='inputEmail' name='from' value='".$_SESSION['id']."' />"; ?>
              <?php echo  "<input type='text' class='form-control' id='inputEmail' name='id' value='".$id."' />"; ?>
           
        </div>
        <div class="form-group">
        <?php if(!isset($_SESSION['id'])){
           echo "<h4 align='center'>You need to login to submit a review</h4>";

          
                          }
                          else {
                            echo "
          
                          <label class='col-md-4 control-label' for='sumit'></label>
                          <button type='submit'  class='btn btn-danger custom-btn-submit' id='submit-btn'>Submit</button>";
                           
                            } ?>              
                                           
          </div>

        </form>
    </div>
    </div>
       
    </div>
    <div class="col-md-12">
            
    </div>
</div>
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

     <!-- Modal HTML -->
    <div id="resmodal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title">Make Reservation</h2>
                </div>
                <div class="modal-body">
                  <form action="reserve.php" enctype="multipart/form-data" method="POST">


    

        <div class="form-group">

            <label for="inputEmail">Reserve from</label>

            <input type="text" class="form-control" id="resfrom"name="resfrom" data-provide="datepicker" placeholder="Check in date">

        </div>

        <div class="form-group">

            <label for="inputPassword">Reserve to</label>

            <input type="text" class="form-control" id="resto"name="resto" data-provide="datepicker" placeholder="Check out date">

        </div>

        <div class="form-group" style="display:none">

          <?php $listing_id=$_GET['id']; 
           echo "

          <input type='text' name='user_id' value='".$_SESSION['id']."'></input>
          <input type='text' name='listing_id' value='".$listing_id."'></input>

          ";?>


        </div>

        

        <button type="submit" class="btn btn-primary">Reserve</button>

   



                  </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   
                </div>
            </div>
        </div>
    </div>

<?php include_once('../footer/footer.php'); ?>

    <script type="text/javascript">
    $(document).ready(function(){
    $("#map_button").click(function(){
        $("#map_form").toggle();
    });
});

    </script>

     <script type="text/javascript">
      $('#resfrom').datepicker({
   
    startDate: '-d'
})

  $('#resto').datepicker({
   
    startDate: '-d'
})
    </script>

    
  </body>
</html>