<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

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

    <!-- jasny -->
     <link href="../jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" media="screen">
    <link href="../jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
	<?php include_once('../header/header.php'); ?>
    <div class="row">
    <div class="container">
    	<div class="col-md-3" id="sidemenu">
    		<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">Edit Profile</a></li>
    <li><a href="#">Photo</a></li>
    <li><a href="#">Messages</a></li>
    <li><a href="#">Verification</a></li>
    <li><a href="#">Reviews</a></li>
</ul>
    	</div>
<?php
require_once('../connection/connection.php');
$my_id=$_SESSION['id'];
echo $_SESSION['id'];

$sql="SELECT * FROM `perm_user` WHERE perm_id='$my_id'";
$result=mysql_query($sql);




while($row=mysql_fetch_array($result)){

    $GLOBALS['fname']=$row['fname'];
    $l_name=$row['lname'];
    $username=$row['usrnm'];
    $email=$row['email'];
    $password=$row['pswd'];

}

   

?>
    	<div class="col-md-8">
    		<form role="form" id="myform" class="form-horizontal">


                                


                                        <div id="form_panel" class="panel-body">
                                           
                                        <h1 align="middle">Details</h1>
                                                <div id="sign-up-error" class="col-md-10 col-md-offset-1 alert-danger hidden"></div>
                                                <div class="form-group">
                                                        <label class="col-md-4 control-label" for="f_name">First Name:</label>
                                                        <div class="col-md-6">
                                                  <input type='text' class='form-control' id='f_name' name='f_name' value="" />
                                

                                






                                                            
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-4 control-label" for="l_name">Last Name:</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="l_name" id="l_name">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="username">Preferred Username:</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="username" id="username">
                                                        <span id="checking-username" class="hidden"> </span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="email">Primary Email:</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="email" id="email">
                                                        <span id="checking-email" class="hidden"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="password">Gender:</label>
                                                    <div class="col-md-6">
                                                    <select class="form-control ">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    </select>
                                                </div>
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label" for="r_password">Re-type Password:</label>
                                                    <div class="col-md-6">
                                                        <input type="password" class="form-control" name="r_password" id="r_password">
                                                    </div>
                                                </div>

                                                 <div class="form-group">
												<label class="col-md-4 control-label" for="r_password">Date of Birth</label>
												<div class="col-md-6">
												
												<input id='demo1' name="date"  class="form-control" type='text' size='25'><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="../datepicker/cal.gif" width="" height="" border="0" alt="Pick a date"></input>

											</div>
												
											</div>
                                                <div class="form-group has-feedback">
                                                <div class="col-md-3 col-sm-offset-5">
                                                    <div class="checkbox">
                                                            <input type="checkbox" name="acceptTerms" data-bv-field="acceptTerms">
                                                            <i class="form-control-feedback" data-bv-field="acceptTerms"></i>
                                                             Accept the <a href="terms-conditions">terms and policies</a>
                                                    </div>
                                                </div>

                                                </div>
                                               
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-4 control-label" for="sumit"></label>
                                            <button type="submit"  class="btn btn-danger custom-btn-submit" id="submit-btn">Submit</button>                
                                            <a href="../login" class="btn btn-success custom-btn-submit hidden" id="logon">Login</a>
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
</body>
</html>