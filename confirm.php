<?php
include_once("connection/connection.php");
$conf_link=$_GET['conf'];
$sql="SELECT * FROM `reg_temp` WHERE conf_link='$conf_link'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){





while ($row= mysql_fetch_array($result) or die(mysql_error())) {

	  
	  $fname=$row['temp_fname'];
	  
	  $lname=$row['temp_lname'];
	  
	  $usrnm=$row['temp_usrnm'];
	  $pswd=$row['temp_pswd'];
	  $email=$row['temp_email'];

	  $sql2="INSERT INTO `perm_user` (`perm_id`, `fname`, `lname`, `usrnm`, `email`, `pswd`)
 VALUES (NULL, '$fname', '$lname', '$usrnm', '$email', '$pswd')";

$result2=mysql_query($sql2) or die(mysql_error());
header("location:../profile/profile.php");
	  
	}

}
else {

	header("location:signup.php");

}


?>