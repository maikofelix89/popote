<?php
include_once("../connection/connection.php");


$listing_id=$_POST['listing_id'];




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






$sql="UPDATE `listings` SET `home_type` = '$hometype',
`room_type`='$roomtype',
`no_guests`='$no_of_guests', 
`city`='$city',
`checkin`='$date',
`checkout`='$date2',
`pricing_method`='$pricing',
`currency`='$pricing',
`per_night`='$per_night',
`photo1`='$target_path1',
`photo2`='$target_path2',
`photo3`='$target_path3',
`description`='$acc_details'  WHERE `id` ='$listing_id'";

 $result=mysql_query($sql) or die(mysql_error());

 header('location:../listing/mylistings.php')

?>