<?php
include_once("../connection/connection.php");
$hometype=$_POST['hometype'];
$roomtype=$_POST['roomtype'];
$no_of_guests=$_POST['no_of_guests'];
$city=$_POST['city'];
$date=$_POST['date'];
$date2=$_POST['date2'];
$pricing=$_POST['pricing'];
$currency=$_POST['currency'];
$per_night=$_POST['per_night'];
$id=$_POST['id'];

$acc_details=$_POST['acc_details'];


$target_path = "../images/";
$target_path1 = $target_path . basename( $_FILES['photo1']['name']); 
$target_path2 = $target_path . basename( $_FILES['photo2']['name']);
$target_path3 = $target_path . basename( $_FILES['photo3']['name']);


move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path1);
move_uploaded_file($_FILES['photo2']['tmp_name'], $target_path2);
move_uploaded_file($_FILES['photo3']['tmp_name'], $target_path3);












$sql="INSERT INTO `popote`.`listings` (`id`, `user_id`, `home_type`, `room_type`, `no_guests`, `city`, `checkin`,`checkout`, `pricing_method`, `currency`, `per_night`, `photo1`, `photo2`, `photo3`, `description`) 
VALUES (NULL, '$id','$hometype', '$roomtype', '$no_of_guests', '$city', '$date','$date2', '$pricing', '$currency', '$per_night', '$target_path1', '$target_path2', '$target_path3', '$acc_details')";
$result=mysql_query($sql) or mysql_error();

header('location:view_listings.php');



?>