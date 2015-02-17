<?php
include_once("../connection/connection.php");
$username=$_POST['usrnm'];
$password=md5($_POST['pswd']);


$fname=$_POST['fname'];
$lname=$_POST['lname'];

$email=$_POST['email'];
$myno= mt_rand();
$conf_link=crypt($myno+$fname+$password);



$sql2="SELECT * FROM perm_user WHERE usrnm='$username'";
$result2=mysql_query($sql2);
$count2=mysql_num_rows($result2);
if($count2==0){

				$sql3="SELECT * FROM perm_user WHERE email='$email'";
				$result3=mysql_query($sql3);
				$count3=mysql_num_rows($result3);

				if($count3==0){

									$sql="INSERT INTO `reg_temp` (`temp_id`, `temp_fname`, `temp_lname`, `temp_usrnm`, `temp_email`, `temp_pswd`,`conf_link`)
									 VALUES (NULL, '$fname', '$lname', '$username', '$email', '$password','$conf_link')";

									$result=mysql_query($sql);
									//$msg ='http://www.felixmaiko.com/popote/confirm.php?conf='.$conf_link;

									$msg ='../confirm.php?conf='.$conf_link;
									echo $msg;

									header('location:'.$msg);





									//send email
									mail($email,"Welcome to  
										Popote Listings",$msg);
									}

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