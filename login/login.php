<?php
ob_start();
include_once("../connection/connection.php");
$usrnm=$_POST['usrnm'];
$pswd=$_POST['pswd'];



//$psword = stripslashes($psword);

$psword = md5(mysql_real_escape_string($pswd));






$usrnm = stripslashes($usrnm);

$usrnm = mysql_real_escape_string($usrnm);


$sql="SELECT * FROM `perm_user` WHERE usrnm='$usrnm' and pswd='$psword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


while($row=mysql_fetch_array($result)){
	$user_id=$row['perm_id'];
}


if($count==1){
session_start();
$usrnm=$_POST['usrnm'];

$_SESSION['usrnm']= $usrnm;
$_SESSION['id']=$user_id;





header("location:../");
}
else {
echo "Wrong Username or Password";
header("location:../login/alt_login.php");
}
ob_end_flush();
?>