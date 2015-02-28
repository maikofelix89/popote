<?php
session_start();
include_once('../connection/connection.php');
$res_id=$_GET['id'];

$sql="SELECT * FROM reservations WHERE res_id='$res_id'";
$result=mysql_query($sql);



$count=mysql_num_rows($result);

if($count==1){

    $sql2=" UPDATE `reservations` SET `approved`='t' WHERE  res_id='$res_id'";
    $result2=mysql_query($sql2) or mysql_error();
    header('location:../profile/others_reservations.php');


				    while($row=mysql_fetch_array($result)){

										$user=$row['user_id'];
										$listing_id=$row['listing_id'];

										$firstmsg="Your reservation has been approved,please check your reservations and proceed to pay";

										
									    

									    $message=$firstmsg;
									   
									    $from=$_SESSION['id'];
									    $date = date('Y-m-d H:i:s');

									    $sql3="INSERT INTO `popote`.`messages` (`message_id`, `recepient`, `sender`, `message`, `date`, `read`) 
									        VALUES (NULL, '$user', '$from', '$message', '$date', 'f');";
									    $result3=mysql_query($sql3);

													   $sql5="SELECT * FROM `perm_user` WHERE perm_id='$user'";
				                                       $result5=mysql_query($sql5);




																while($row5=mysql_fetch_array($result5)){

																    
																    $email=$row5['email'];
																    $msg="Login and view your messages for more details <a href='http://popotelistings.com/alt_login.php'>Login</a>";
																 
																    mail($email,"Your reservation has been approved",$msg);
																   

																}

					
				}

}

else{

	 header('location:myprofile.php');
	 
}






?>