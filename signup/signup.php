<?php
include_once("../connection/connection.php");
$username=$_POST['usrnm'];
$password=md5($_POST['pswd']);


$fname=$_POST['fname'];
$lname=$_POST['lname'];

$email=$_POST['email'];
$myno= mt_rand();
$conf_link=crypt($myno+$fname+$password);



$sql="SELECT * FROM perm_user WHERE usrnm='$username'";
$result=mysql_query($sql) or die(mysql_error());
$count=mysql_num_rows($result);
if($count==0){

				$sql1="SELECT * FROM perm_user WHERE email='$email'";
				$result1=mysql_query($sql1) or die(mysql_error());
				$count1=mysql_num_rows($result1);

				if($count1==0){

									$sql3="INSERT INTO `reg_temp` (`temp_id`, `temp_fname`, `temp_lname`, `temp_usrnm`, `temp_email`, `temp_pswd`,`conf_link`)
									 VALUES (NULL, '$fname', '$lname', '$username', '$email', '$password','$conf_link')";

									$result3=mysql_query($sql3) or die(mysql_error());
									//$msg ='http://www.popotelistings.com/confirm.php?conf='.$conf_link;


									$msg ='../confirm.php?conf='.$conf_link;

									//send email
									mail($email,"Welcome to Popote Listings",$msg);

									

									//header('location:');





									

			else{
				echo "only one email per account";
				echo "<br>";
	             echo "<a href='../signup.html'>Try Again</a>";
			}





}
else{
	echo "Sorry but that Username has been taken";
	echo "<br>";
	echo "<a href='../signup.html'>Try Again</a>";
}

?>