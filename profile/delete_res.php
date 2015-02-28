<?php
session_start();
include_once("../connection/connection.php");
$res_id=$_GET['res'];


echo $message_id;

$sql="DELETE FROM  `reservations` WHERE `res_id` ='$res_id' LIMIT 1;";
$result=mysql_query($sql) or die(mysql_error());

header('location:../profile/my_reservations.php');

?>