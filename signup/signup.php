<?php
include_once("../connection/connection.php");
$username=$_POST['usrnm'];
$password=md5($_POST['pswd']);

$fname=$_POST['fname'];
$lname=$_POST['lname'];

$email=$_POST['email'];
$myno= mt_rand();
$conf_link=crypt($myno+$fname+$password);





$sql="INSERT INTO `reg_temp` (`temp_id`, `temp_fname`, `temp_lname`, `temp_usrnm`, `temp_email`, `temp_pswd`,`conf_link`)
 VALUES (NULL, '$fname', '$lname', '$username', '$email', '$password','$conf_link')";

$result=mysql_query($sql);



//$msg ='http://www.felixmaiko.com/popote/confirm.php?conf='.$conf_link;

$msg ='Click the link to activate your account '.'../confirm.php?conf='.$conf_link;
echo $msg;

header('location:'.$msg);





//send email
mail($email,"Welcome to  
	Popote Listings",$msg);


?>