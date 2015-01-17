 <div class="row" id="abtus"><!-- about us row -->
        <div class="container">
        <div class="col-sm-12">
          <h1 align="center">About Us</h1>
          <hr class="intro-divider" />
          <div class="container">

          <p>www.popotelistings.com is an online platform that connects hosts
           who have accommodations(any secure space ) to rent with guests seeking to rent such 
           accommodations for short lets. 
           <p>www.popotelistings.com web platform links people from 
           diverse cultural heritage to sample the home to home,culture to culture unique tastes and 
           authentic travel experience across the African continent and beyond thus allowing you to 
           mingle with Hosts and locals on an equal footing, to share their stories, sample their cuisine,
            make friends and take home beautiful memories.</p>
 
<p>During your stay across East Africa,Africa and the world  the popote listings team will offer you 
complete support with our staff being on call 24 hours, ensuring your holiday/travel is enjoyable
 and problem free. </p> 

<p>Our local hosts have a unique knowledge of the region’s local insights and its attractions and they assists guests in interacting with villagers giving them wonderful 
  experiences off the beaten track. This provides the hosts with income and meaningful employment.</p>
</p>
</div>


        </div>

      </div><!-- end of container -->

      </div><!-- end of about us row -->



<div class="row" id="hiw"><!-- how it works row -->
        <div class="col-sm-12">
          <div class="container">
          <h1 align="center">How it Works</h1>
          
          <hr class="intro-divider" />



    <div id="myCarousel2" class="carousel slide" >

        <!-- Carousel indicators -->

        <ol class="carousel-indicators">

            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel2" data-slide-to="1"></li>

            <li data-target="#myCarousel2" data-slide-to="2"></li>

        </ol>   

        <!-- Carousel items -->

        <div class="carousel-inner">

            <div class="item active" id="slide12">

                

                <div class="carousel-caption">

                  <h1>1.Check Availability</h1>
                  <hr class="intro-divider"/>

                  <p>The global communities of Hosts on popotelistings platform receive 
                    bookings on a request basis. After searching and getting your amazing 
                    destination   send the host a message with your specific dates. 
                    Once the host confirms they are available, you can book.</p>

                </div>

            </div>

            <div class="item" id="slide22">

               

                <div class="carousel-caption">

                  <h1>2.Complete your booking</h1>
                  <hr class="intro-divider"/>

                  <p>Once a host confirms they are available, you can complete your booking online.
                   Click on the ‘Book Now ‘button of the Listing. Fill in your details and pay amount
                    online to secure the booking. You’ll receive a confirmation email after you 
                    complete the payment process. It will include the payment receipt to be presented
                     to the host on the day of check in and exact address and directions to the host, 
                     and your host’s email and telephone contact details.</p>

                </div>

            </div>

            <div class="item" id="slide32">

                

                <div class="carousel-caption" >

                  <h1>3.Travel to your chosen (Destination/Host)</h1>
                  <hr class="intro-divider"/>

                  <p>Pack your bags, it’s time to go! Let your host know in advance what
                   time you expect to arrive at their home. Bring photo ID and a copy of 
                   your booking confirmation email.</p>

                </div>

            </div>

        </div>

        <!-- Carousel nav -->

        <a class="carousel-control left" href="#myCarousel2" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left"></span>

        </a>

        <a class="carousel-control right" href="#myCarousel2" data-slide="next">

            <span class="glyphicon glyphicon-chevron-right"></span>

        </a>

    </div>



          

        </div>
      </div><!-- end of col -->

      </div><!-- end of how it works row -->

      <div class="row"><!-- success row -->
       <h1 align="center">Photos</h1>
       <hr class="intro-divider" />
        <h2 align="center">Tourists mingling with the local people freely</h2>

          <div class="container">
          

          
         
          <div class="col-sm-4">

          <div class="thumbnail">
            <img src="images/4.jpg" class="img-responsive" />


          </div>
        </div>

        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/2.jpg" class="img-responsive" />

          </div>
        </div>

        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/5.jpg" class="img-responsive" />

          </div>
        </div>

        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/6.jpg" class="img-responsive" />

          </div>
        </div>

        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/samburu.jpg" class="img-responsive" />

          </div>
        </div>

          


       
      </div><!-- end of container -->

      </div><!-- end of about us row -->

      <div class="row" id="popular">
        <h1 align="center">Some of Listings</h1>
        <hr class="intro-divider" />

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
   ASC LIMIT $start, $max") or die("query error!");
 

 
  while ($row=mysql_fetch_array($rs)) {


    $id=$row['id'];
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
            <p>".$city."</p>
            <p>".$per_night."".$currency."".$pricing_method."</p>
           </div>
           
            <a href='listing/listing_details.php?id=".$id."'><img src='".$photo2."' class='img-responsive' /></a>
            </div>

           
        
  

</div>";

}
?>


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
                                <a href="https://www.linkedin.com/"><i class="fa  fa-linkedin fa-fw"></i> <span class="network-name"></span></a>
                            </li>
                        </ul>
                        
                        

                        

                           <p><a href="terms/terms.php">Terms and conditions</a></p>   
                            
                        <p>Copyright &copy;Popote Listings 2014<p>
                    </div>
                </div>
            </div>
        </div>
    </footer>