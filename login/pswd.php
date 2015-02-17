<?php
include_once('../connection/connection.php');
$email=$_POST['email'];

$sql="SELECT * FROM perm_user WHERE email='$email'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){

	$email=$_POST['email'];
    $myno= mt_rand();
    $conf_link=crypt($email+$myno);

    $newpswd=md5($conf_link);

    echo $conf_link;

	//mail($email,"Your new password,make sure you change it",$msg);


	$sql2=" UPDATE `perm_user` SET `pswd`='$newpswd' WHERE  email='$email'";
    $result2=mysql_query($sql2) or mysql_error();

}

else{
	 echo "The email does not exist";
}






?>