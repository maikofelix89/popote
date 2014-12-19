<?php
ob_start();
include_once("../connection/connection.php");
$usrnm=$_POST['usrnm'];


$psword=md5($_POST['pswd']);



$usrnm = stripslashes($usrnm);

$usrnm = mysql_real_escape_string($usrnm);


$sql="SELECT * FROM `perm_user` WHERE usrnm='$usrnm' and pswd='$psword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


echo $psword;


if($count==1){
session_start();
$usrnm=$_POST['usrnm'];

$_SESSION['usrnm']= $usrnm;





header("location:../profile/index.php");
}
else {
echo "Wrong Username or Password";
header("location:../index.html");
}
ob_end_flush();
?>