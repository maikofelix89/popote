<?php
session_start();
include_once("../connection/connection.php");
$message_id=$_GET['id'];


echo $message_id;

$sql="DELETE FROM `popote`.`messages` WHERE `messages`.`message_id` ='$message_id' LIMIT 1;";;
$result=mysql_query($sql) or die(mysql_error());

header('location:../message/view_message.php');

?>