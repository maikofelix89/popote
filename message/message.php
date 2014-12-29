<?php
session_start();
include_once("../connection/connection.php");
$id=$_SESSION['id'];
$message=$_POST['message'];
$to=$_POST['to'];
$from=$_POST['from'];
$date = date('Y-m-d H:i:s');

$sql="INSERT INTO `popote`.`messages` (`message_id`, `recepient`, `sender`, `message`, `date`, `read`) 
VALUES (NULL, '$to', '$from', '$message', '$date', 'f');";
$result=mysql_query($sql);

header('location:../message/view_message.php');

?>