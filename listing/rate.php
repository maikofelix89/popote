<?php
include_once('../connection/connection.php');
$rating=$_POST['rating'];
$user_id=$_POST['user_id'];
$listing_id=$_POST['listing_id'];
$sql="INSERT INTO `rating` (`rate_id`, `listing_id`, `rating`, `user_id`) VALUES (NULL, '$listing_id', '$rating', '$user_id');";
$result=mysql_query($sql) or die(mysql_error());

$location="listing_details.php?id=".$listing_id;

header('location:'.$location);

?>