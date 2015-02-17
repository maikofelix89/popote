<?php
session_start();
include_once("../connection/connection.php");



$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$username=$_POST['username'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$password=md5($_POST['password']);
$telno=$_POST['telno'];
$id=$_SESSION['id'];









	 $sql=" UPDATE `perm_user` SET `fname`='$f_name',`lname`='$l_name',`usrnm`='$username',
	 `email`='$email',`pswd`='$password',`gender`='$gender',`dob`='$date',
	 `tel_no`='$telno' WHERE  perm_id='$id'";
$result=mysql_query($sql) or mysql_error();

header('location:../profile/myprofile.php');





?>