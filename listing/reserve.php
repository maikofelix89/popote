<?php
include_once("../connection/connection.php");
$user_id=$_POST['user_id'];
$listing_id=$_POST['listing_id'];

$res_from=$_POST['resfrom'];
$res_to=$_POST['resto'];

$date = date('Y-m-d H:i:s');


echo $res_from.$res_to;


















$sql="INSERT INTO `reservations` (`res_id`, `listing_id`, `user_id`, `res_from`, `res_to`, `res_date`) VALUES (NULL, '$listing_id', '$user_id', '$res_from', '$res_to', '$date')";
$result=mysql_query($sql) or mysql_error();

header('location:../profile/');



?>