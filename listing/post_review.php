<?php
include_once("../connection/connection.php");
$from=$_POST['from'];
$review=$_POST['review'];
$list_id=$_POST['id'];
$date=date("Y-m-d");

echo $date;

$sql="INSERT INTO `reviews` (`rev_id`,`listing_id`, `user_id`, `review`,`date` ) 
VALUES (NULL,'$list_id','$from', '$review','$date')";
$result=mysql_query($sql) or die(mysql_error());

header('location:listing_details.php');
?>