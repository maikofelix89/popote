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

    
  </head>
  <body>

<?php include_once('../header/header.php'); ?>
<div class="container" id="content">
  <h1 align="center">Just a few more details..</h1>


<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
     
      <div class="panel panel-body">
        <form  class="form-horizontal" action="post_amenities.php" method="POST" enctype="multipart/form-data">
          
            <h2 align="center">Amenities</h2>
             <hr class="intro-divider">
            
                    <div class="form-group">
                    <label class="col-md-offset-3">Internet   :</label>
                    <input type="radio"  name="internet" value="Yes">Yes
                    <input type="radio"  name="internet" value="No" checked>No
                    </div>
                    
         

                    <div class="form-group">
                      <label class="col-md-offset-3">TV   :</label>
                      <input type="radio" name="tv" value="Yes">Yes
                      <input type="radio" name="tv" value="No"checked>No
                    </div>
                    

                    <div class="form-group">
                      <label class="col-md-offset-3">Washer  :</label>
                      <input type="radio" name="Washer" value="Yes">Yes
                      <input type="radio" name="Washer" value="No"checked>No
                    </div>
                    

                    <div class="form-group">
                      <label class="col-md-offset-3">Air conditioning  :</label>
                      <input type="radio" name="air" value="Yes">Yes
                       <input type="radio" name="air" value="No"checked>No
                    </div>
                    

                    <div class="form-group">
                      <label class="col-md-offset-3">Hot shower  :</label>
                      <input type="radio" name="Shower" value="Yes">Yes
                      <input type="radio" name="Shower" value="No"checked>No
                    </div>

         

                    <div class="form-group">
                      <label class="col-md-offset-3">Pool  :</label>
                      <input type="radio" name="Pool" value="Yes">Yes
                      <input type="radio" name="Pool" value="No"checked>No
                    </div>

                    <div class="form-group">
                      <label class="col-md-offset-3">Parking  :</label>
                      <input type="radio" name="Parking" value="Yes">Yes
                       <input type="radio" name="Parking" value="No"checked>No
                    </div>

                    <div class="form-group">
                      <label class="col-md-offset-3">Cable Tv  :</label>
                      <input type="radio" name="cable" value="Yes">Yes
                      <input type="radio" name="cable" value="No"checked>No
                    </div>
                   

                    <div class="form-group">
                        <label class="col-md-offset-3">Gymn  :</label>
                        <input type="radio" name="Gymn" value="Yes">Yes
                         <input type="radio" name="Gymn" value="No" checked>No
                    </div> 

                    <div class="form-group">
                      <label class="col-md-offset-3">Facility for disabled  :</label>
                      <input type="radio" name="Facility" value="Yes">Yes
                      <input type="radio" name="Facility" value="No"checked>No
                    </div> 

         
          </div> 
           <div class="form-group" style="display:none">
                           
                        
          <?php 

          $id=$_GET['id'];


          echo  "<input type='text' class='form-control' name='listing_id' value='".$id."' />"; ?>
                            
                            
                       

                                                    
                    </div>
          
          
            <div class="form-group">
                            <label class="col-md-offset-3 col-md-3"checked>No of Beds  :</label>
                        
                            <input type="text"  name="no_of_beds">
                            
                            
                       

                                                    
                    </div>
                     
            
           
               <div class="form-group">
                            <label class="col-md-offset-3 col-md-3"checked>No of Bathrooms  :</label>
                        
                            <input type="text"  name="bathrooms">
                            
                       
                                                    
                    </div>
          

          </div>

                    
          

          

            
          <h2 align="center">House Rules</h2>
          <hr class="intro-divider">
          <div class="form-group">
           
                  <textarea class="form-control" rows="10" col="4"  name="rules" placeholder="Type your house rules"></textarea>
               
          </div>
          <div class="form-group">
            <button class="btn btn-success" type="submit">Post</button>
          </div>

           
          
        </form>
      

    </div>
  </div>
</div>

</div>


<?php include_once('../footer/footer.php'); ?>






      

  

    















    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-1.11.0.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    
  </body>
</html>