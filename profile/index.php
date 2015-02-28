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
                <li class="active"><a href="../profile/index.php">Edit Profile</a></li>
                <li ><a href="../profile/photo.php">Photo</a></li>
                <li ><a href="../profile/myprofile.php">My Profile</a></li>
                <ul  class="nav nav-pills nav-stacked">
                 <li><a href="my_reservations.php">My Reservations on other's listings</a></li>
                 <li><a href="#">Reservations on my listing</a></li>
                </ul>
            </ul>
    	</div>
<?php
require_once('../connection/connection.php');
$my_id=$_SESSION['id'];


$sql="SELECT * FROM `perm_user` WHERE perm_id='$my_id'";
$result=mysql_query($sql);




while($row=mysql_fetch_array($result)){

    $fname=$row['fname'];
    $l_name=$row['lname'];
    $username=$row['usrnm'];
    $email=$row['email'];
    $password=$row['pswd'];

    



   


    echo "<div class='col-md-8'>
    		<form role='form' id='myform' class='form-horizontal' action='../profile/update_prof.php' method='POST' enctype='multipart/form-data'>


                                


                                        <div id='form_panel' class='panel-body'>
                                           
                                        <h1 align='middle'>Edit Profile</h1>
                                        <hr class='intro-divider' />
                                                <div id='sign-up-error' class='col-md-10 col-md-offset-1 alert-danger hidden'></div>
                                                <div class='form-group'>
                                                        <label class='col-md-4 control-label' for='f_name'>First Name:</label>
                                                        <div class='col-md-6'>
                                                  <input type='text' class='form-control' id='f_name' name='f_name' value='".$fname."' />
                                

                                






                                                            
                                                        </div>
                                                </div>
                                                <div class='form-group'>
                                                        <label class='col-md-4 control-label' for='l_name'>Last Name:</label>
                                                        <div class='col-md-6'>
                                                            <input type='text' class='form-control' name='l_name' id='l_name' value='".$l_name."'>
                                                        </div>
                                                </div>
                                                <div class='form-group'>
                                                    <label class='col-md-4 control-label' for='username'>Username:</label>
                                                    <div class='col-md-6'>
                                                        <input type='text' class='form-control' name='username' id='username' value='".$username."'>
                                                       
                                                    </div>
                                                    
                                                </div>
                                                <div class='form-group'>
                                                    <label class='col-md-4 control-label' for='email'>Email:</label>
                                                    <div class='col-md-6'>
                                                        <input type='text' class='form-control' name='email' id='email' value='".$email."'>
                                                       
                                                    </div>
                                                </div>
                                                <div class='form-group'>
                                                    <label class='col-md-4 control-label' for='password'>Gender:</label>
                                                    <div class='col-md-6'>
                                                    <select class='form-control' name='gender'>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    </select>
                                                </div>
                                                
                                                </div>
                                                <div class='form-group'>
                                                    <label class='col-md-4 control-label' for='password'>Password:</label>
                                                    <div class='col-md-6'>
                                                        <input type='password' class='form-control' name='password' id='password'>
                                                    </div>
                                                </div>

                                                 <div class='form-group'>
												<label class='col-md-4 control-label' for='r_password'>Date of Birth</label>
												<div class='col-md-6'>
												
												 <input type='text' class='form-control' id='date' name='date' data-provide='datepicker' placeholder='Date of Birth'>

											</div>
												
											</div>
                                               
                                               
                                        </div>
                                        <div class='form-group'>
                                                    <label class='col-md-4 control-label' for='telno'>Telno</label>
                                                    <div class='col-md-6'>
                                                        <input type='text' class='form-control' name='telno' id='telno' />
                                                       
                                                    </div>
                                                    
                                                </div>
                                        <div class='form-group'>
                                        	<label class='col-md-4 control-label' for='sumit'></label>
                                            <button type='submit'  class='btn btn-success custom-btn-submit' id='submit-btn'>Update</button>                
                                           
                                        </div>
                                </form>";
                            }

                                ?>
    	</div>
    </div>
    </div>



 <script type="text/javascript">
     

  $('#date').datepicker({
   
   
})
    </script>
	
</body>
</html>