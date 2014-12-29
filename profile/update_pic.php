<?php
include_once("../connection/connection.php");
session_start();
$user_id=$_SESSION['id'];



$target_path = "../prof_images/";
$target_path1 = $target_path . basename( $_FILES['photo1']['name']); 




move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path1);













$sql=" UPDATE `perm_user` SET `pic`='$target_path1'
	  WHERE  perm_id='$user_id'";
$result=mysql_query($sql);

header('location:../profile/index.php');



?>