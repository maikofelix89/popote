<?php
include_once('../connection/connection.php');
 $id=$_GET['id'];
 $map=$_POST['map'];

 $sql="INSERT INTO `listing_map` (`map_id`, `listing_id`, `link`) VALUES (NULL, '$id', '$map')";
 $reqult=mysql_query($sql) or die(mysql_error());
 


 $location ='listing_details.php?id='.$id;

header('location:'.$location);

 


?>