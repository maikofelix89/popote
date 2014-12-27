<?php
session_start();
include_once("../connection/connection.php");
$id=$_SESSION['id'];
$message=$_POST['message'];
$to=$_POST['to'];
$from=$_POST['from'];

$sql="INSERT INTO `popote`.`messages` (`message_id`, `recepient`, `sender`, `message`, `date`, `read`) 
VALUES (NULL, '$to', '$from', '$message', '', 'f');";
$result=mysql_query($sql);

header('location:../listing/view_listings.php');

?>