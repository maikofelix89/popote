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
<!-- jasny -->
     <link href="../jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" media="screen">
    <link href="../jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">

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
<?php include_once('../header/header.php');
 ?>
<div class="container" id="content">
    <div class="row">
    <div class="container">
        <div class="col-md-3" id="sidemenu">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="../message/view_message.php">Inbox</a></li>
                <li><a href="../message/sent_messages.php">Sent</a></li>
                
            </ul>
        </div>
        <div class="col-md-8">
<?php
require_once('../connection/connection.php');
$id=$_SESSION['id'];

$sql="SELECT * FROM `messages` WHERE recepient='$id' ORDER BY `message_id` DESC ";
$result=mysql_query($sql);

$sql3="UPDATE `popote`.`messages` SET `read` = 't' WHERE `recepient` =$id";

$result3=mysql_query($sql3);





while($row=mysql_fetch_array($result)){
	$sender=$row['sender'];
    $message=$row['message'];
    $thedate=$row['date'];
    $message_id=$row['message_id'];
    
$sql2="SELECT * FROM `perm_user` WHERE perm_id='$sender'";

$result2=mysql_query($sql2);

while($row2=mysql_fetch_array($result2)){
    $fname=$row2['fname'];
     $lname=$row2['lname'];

    $date = date('Y-m-d H:i:s');
}

    
    
    echo" 
    <div class='row'>
            <div class='col-md-12'>

    <div class='panel panel-info'>
                     <div class='panel-heading'>From :<a href='../user.php?user=".$id."'> ".$fname." ".$lname."</a><br></br>Time: ".$thedate."</div>
                     <div class='panel-body'>
                        ".$message."
                    </div>
                    <div class='panel-footer'><a href='#".$id."' data-toggle='modal' class='fa fa-pencil-square-o'> Reply </a>&nbsp;
                    <a href='../message/delete.php?id=".$message_id."' class='fa fa-trash'> Delete</a></div>
                 </div><!-- end of panel -->
                 </div><!-- end of column -->
                 </div><!-- end of row -->
                
                 



   

     

    <!-- Modal HTML -->

    <div id=".$id." class='modal fade'>

        <div class='modal-dialog'>

            <div class='modal-content'>

                <div class='modal-header'>

                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>

                    <h4 class='modal-title'>Confirmation</h4>

                </div>

                <div class='modal-body'>

                    <form role='form' id='message_form' class='form-horizontal' action='../message/message.php' method='POST' enctype='multipart/form-data'>

        <div class='form-group'>

            <label for='inputEmail'>user</label>

        <input type='text' class='form-control' id='inputEmail' name='fname' value='".$fname."' readonly />
            

        </div>
        <div class='form-group' style='display:none'>
          <input type='text' class='form-control' id='inputEmail' name='from' value='".$_SESSION['id']."' />
        <input type='text' class='form-control' id='inputEmail' name='to' value='".$sender."' />
           
        </div>

        <div class='form-group'>

            <label for='textarea'></label>

            <textarea class='form-control' id='message' name='message'>
                
            </textarea>

            

        </div>

        
        <button type='submit' class='btn btn-danger custom-btn-submit' id='submit-btn'>Send Message</button>

    </form>

                </div>

                <div class='modal-footer'>

                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>

                    

                </div>

            </div>

        </div>

    </div>







                 ";




           
}
?>

</div><!-- end of row -->
</div>				
				

	   














    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-1.11.0.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- jasny -->
    <script src="../jasny-bootstrap/js/jasny-bootstrap.js"></script>
    <script src="../jasny-bootstrap/js/jasny-bootstrap.min.js"></script>

    
  </body>
</html>