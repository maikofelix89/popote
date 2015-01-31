<?php
include_once('../connection/connection.php');

$internet="Internet :".$_POST['internet'];
$TV="TV :".$_POST['tv'];
$Washer=" Washer :".$_POST['Washer'];
$Air_conditioning=" Air conditioning ".$_POST['air'];
$Shower=" Hot Shower :".$_POST['Shower'];
$Pool=" Swimming Pool :".$_POST['Pool'];
$Parking=" Parking :".$_POST['Parking'];
$cable=" Cable TV :".$_POST['cable'];
$Gymn=" Gymn :".$_POST['Gymn'];
$Facility="Facility for disabled :".$_POST['Facility'];
$beds="No of Beds".$_POST['no_of_beds'];
$bathrooms="No of Bathrooms".$_POST['bathrooms'];
$rules=$_POST['rules'];
$id=$_POST['listing_id'];



$amenities=$internet.",".$TV." ,".$Washer." ,".$Air_conditioning.", ".$Shower." ,".$Pool." ,".$Parking." ,".$cable." ,".$Gymn.", ".$Facility." , ".$beds." ,".$bathrooms;
$sql5="SELECT * FROM `listing_amenities` WHERE listing_id='$id'";
$result5=mysql_query($sql5);
$count=mysql_num_rows($result5);
if($count==0){

$sql=" INSERT INTO `listing_amenities` (`id` ,`listing_id` ,`amenities`,`rules`)VALUES (NULL , '$id','$amenities', '$rules')";
$result=mysql_query($sql) or die(mysql_error());
}
else{
	$sql="UPDATE `listing_amenities` SET amenities='$amenities',rules='$rules' WHERE listing_id='$id'";
	$result=mysql_query($sql);
}

$location="../listing/listing_details.php?id=".$id;

header('location:'.$location);

?>