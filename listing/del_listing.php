<?php
session_start();
include_once("../connection/connection.php");
$listing_id=$_GET['id'];




$sql="DELETE FROM  `listings` WHERE `id` ='$listing_id' LIMIT 1;";
$result=mysql_query($sql) or die(mysql_error());

header('location:../listing/mylistings.php');

?>