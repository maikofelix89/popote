<?php
session_start();

?>

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
   <?php include_once('header/landing_header.php'); ?>
      
      
      <div class="carousel slide" id="myCarousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
          <li data-slide-to="1" data-target="#myCarousel"></li>
          <li data-slide-to="2" data-target="#myCarousel"></li>
        </ol>
      
        
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active" id="slide1">

            <div class="carousel-caption">
              
              <div class="container">
              <img src="images/logo.png" class="img-responsive"/>
            </div>
              <h3>List your property and host international friends</h3>
             <a href="listing/post_listing.php"class="btn btn-danger" id="host">Become a Host</a>
             <hr class="intro-divider" />

              <div class="row" id="searchrow">
        <div class="col-md-12">
          

    <form class="form-inline" action="search.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">

            

            <input type="text" class="form-control" id="location" name="location" placeholder="Location">

        </div>

        <div class="form-group">

           

            <input type="text" class="form-control" id="checkin"name="checkin" data-provide="datepicker" placeholder="Check in date">

        </div>
        <div class="form-group">

           

            <input type="text" class="form-control" id="checkout" name="checkout" data-provide="datepicker" placeholder="Check out date">

        </div>
        <div class="form-group">

           

            <input type="text" class="form-control" id="no_of_guests" name="no_of_guests" placeholder="Guests">

        </div>
       
       

        <button type="submit" class="btn btn-danger btn-lg">Search</button>

    </form>


        </div>
      </div>
              <h4></h4>
              <p></p>
            </div><!-- end carousel-caption-->
          </div><!-- end item -->
          
          <div class="item" id="slide2">
            <div class="carousel-caption">
              
              <div class="container">
              <img src="images/logo.png" class="img-responsive"/>
            </div>
              <h3>Search and find a home away from home</h3>
              <a href="login/alt_login.php"class="btn btn-danger" id="host">Become a Host</a>
              <hr class="intro-divider"  />
              
                        <div class="row" id="searchrow">
        <div class="col-md-12">
          

    <form class="form-inline" action="search.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">

            

            <input type="text" class="form-control" id="location" name="location" placeholder="Location">

        </div>

        <div class="form-group">

           

            <input type="text" class="form-control" id="checkin" name="checkin" data-provide="datepicker" placeholder="Check in date">

        </div>
        <div class="form-group">

           

            <input type="text" class="form-control" id="checkout" name="checkout" data-provide="datepicker" placeholder="Check out date">

        </div>
        <div class="form-group">

           

            <input type="text" class="form-control" id="no_of_guests" name="no_of_guests" placeholder="Guests">

        </div>
       
       

        <button type="submit" class="btn btn-danger btn-lg">Search</button>

    </form>


        </div>
      </div>
              <h4></h4>
              <p></p>
            </div><!-- end carousel-caption-->
          </div><!-- end item -->
          
          <div class="item" id="slide3">
            <div class="carousel-caption">
              
              <div class="container">
              <img src="images/logo.png" class="img-responsive"/>
            </div>
              <h3>Create memories</h3>
               <a href="login/alt_login.php"class="btn btn-danger" id="host">Become a Host</a>
              <hr class="intro-divider"  />
             

                        <div class="row" id="searchrow">
        <div class="col-md-12">
          

    <form class="form-inline" action="search.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">

            

            <input type="text" class="form-control" id="location" name="location" placeholder="Location">

        </div>

        <div class="form-group">

           

            <input type="text" class="form-control" id="checkin" name="checkin" data-provide="datepicker" placeholder="Check in date">

        </div>
        <div class="form-group">

           

            <input type="text" class="form-control" id="checkout" name="checkout" data-provide="datepicker" placeholder="Check out date">

        </div>
        <div class="form-group">

           

            <input type="text" class="form-control" id="no_of_guests" name="no_of_guests" placeholder="Guests">

        </div>
       
       

        <button type="submit" class="btn btn-danger btn-lg">Search</button>

    </form>


        </div>
      </div>
              <h4></h4>
              <p></p>
            </div><!-- end carousel-caption-->
          </div><!-- end item -->
        </div><!-- carousel-inner -->
        
       
      
      </div><!-- end myCarousel -->

  <div class="row" id="hiw">
    <h1 align="center">How  it works</div>
       <hr class="intro-divider" />
    <div class="container">
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="caption">
          <h3>1.Check Availability</h3>
          <hr class="intro-divider" />
         

        </div>
        <p>The global communities of Hosts on popotelistings platform receive 
                    bookings on a request basis. After searching and getting your amazing 
                    destination   send the host a message with your specific dates. 
                    Once the host confirms they are available, you can book.</p>

      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="caption">
          <h3>2.Complete your booking</h3>
          <hr class="intro-divider" />

        </div>
        <p>Once a host confirms they are available, you can complete your booking online.
                   Click on the ‘Book Now ‘button of the Listing. Fill in your details and pay amount
                    online to secure the booking. You’ll receive a confirmation email after you 
                    complete the payment process. It will include the payment receipt to be presented
                     to the host on the day of check in and exact address and directions to the host, 
                     and your host’s email and telephone contact details.</p>

      </div>
    </div>

    <div class="col-md-4">
      <div class="thumbnail">
        <div class="caption">
          <h3>3.Travel to your chosen (Destination/Host)</h3>
          <hr class="intro-divider" />

        </div>
         <p>Pack your bags, it’s time to go! Let your host know in advance what
                   time you expect to arrive at their home. Bring photo ID and a copy of 
                   your booking confirmation email.</p>

      </div>
    </div>
  </div>
  </div>
  <div class="row" id="popular">
    <h1 align="center">Latest Listings</h1>
    <hr class="intro-divider" />
    <div class="col-md-12">

        <?php
    include_once("connection/connection.php");

  $MAX_REC_PER_PAGE=9;
  
  $rs = mysql_query("SELECT COUNT(5) FROM listings") or die("Count query error!");
  list($total) = mysql_fetch_row($rs);
  $total_pages = ceil($total / $MAX_REC_PER_PAGE);
  $page = intval(@$_GET["page"]); 
  if (0 == $page){
  $page = 1;
  }  
  $start = $MAX_REC_PER_PAGE * ($page - 1);
  $max = $MAX_REC_PER_PAGE;
  $rs = mysql_query("SELECT * FROM listings ORDER BY id 
   DESC LIMIT $start, $max") or die("query error!");
 

 
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
    $no_guests=$row['no_guests'];
     $user_id=$row['user_id'];

    $mainphoto=substr($photo1,3);

    $sql2="SELECT * FROM perm_user WHERE perm_id='$user_id'";
    $result2=mysql_query($sql2);

    while($row2=mysql_fetch_array($result2)){

             $ownerid=$row2['perm_id'];
             $fname=$row2['fname'];
             $lname=$row2['lname'];
            
            $ownerpic=substr($row2['pic'],3);


  
  
echo "
<div class='col-md-3'>
    
       
           <div class='thumbnail' id='otherlistingthumb'>
           
           
            <a href='listing/listing_details.php?id=".$id."'><img src='".$mainphoto."' class='img-rounded' style='width:100%;height:200px;' /></a>
            <div class='caption'>
            <p>Location: ".$city."</p>
            <p>Price: ".$per_night."".$currency." ".$pricing_method."</p>
            <hr class='intro-divider' />
            <img src='".$ownerpic."' class='img-circle' height='50' width='50'/>
            <p>Listing by ".$fname."</p>
           

           </div>
            </div>

           
        
  

</div>";
}

}
?>
    </div>
  </div>

  <!-- start of footer section -->

      <footer class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <h3></h3>
                    <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com" ><i class="fa fa-twitter fa-3x"></i> <span class="network-name"></span></a>
                            </li>
                            

                            <li>
                                <a href="https://facebook.com"><i class="fa fa-facebook fa-3x"></i> <span class="network-name"></span></a>
                            </li>
                            <li>
                                <a href="https://facebook.com"><i class="fa  fa-google-plus fa-3x"></i> <span class="network-name"></span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/"><i class="fa  fa-linkedin fa-3x"></i> <span class="network-name"></span></a>
                            </li>
                        </ul>
                        
                        

                        

                           <p><a href="terms/terms.php">Terms and conditions</a></p>   
                            
                        <p>Copyright &copy;Popote Listings 2015<p>
                    </div>
                </div>
            </div>
        </div>
    </footer>    
      


       




      

<!-- login modal -->

    <div id="loginmodal" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <div class="btn btn-danger pull-right" class="close" data-dismiss="modal" aria-hidden="true">Close</div>

                    <h1 class="modal-title">Login</h1>

                </div>

                <div class="modal-body">

                     <form action="login/login.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="inputEmail">Username</label>
                              <input type="text" class="form-control" name="usrnm" id="inpuusername" placeholder="username">
                          </div>
                          <div class="form-group">
                              <label for="inputPassword">Password</label>
                              <input type="password" name="pswd" class="form-control" id="inputPassword" placeholder="Password">
                          </div>
                          
                          <button class="btn btn-success btn-lg" type="submit" >Login</button>
                    </form>

                </div>

                <div class="modal-footer">

                    

                </div>

            </div>

        </div>

    </div>
  <!-- end of login modal -->

  

    















    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="bootstrap-hover/bootstrap-hover-dropdown-master/bootstrap-hover-dropdown.min.js"></script>


    <!-- bootstrap date-picker js -->

    <script src="bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript">

    $(document).ready(function(){

        $("#login").click(function(){

            $("#loginmodal").modal('show');

        });
        $("#login1").click(function(){

            $("#loginmodal").modal('show');

        });

    });

    



    </script>

    <script type="text/javascript">
      $('#checkout').datepicker({
   
    startDate: '-d'
})

  $('#checkin').datepicker({
   
    startDate: '-d'
})
    </script>
  </body>
</html>