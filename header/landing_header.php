<?php 
session_start();






?>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" ><img src="images/logo.png" height="50"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="message/view_message.php"><i class="fa  fa-envelope fa-fw"><i class="badge">Inbox
                        <?php 
                         if (isset($_SESSION['usrnm'])) {
                        require_once('connection/connection.php');
                       $user= $_SESSION['id'];
                       $read="f";
                       
                        $sql="SELECT * FROM `messages` WHERE `recepient` = '$user' && `read` = 'f'";
                        
$result=mysql_query($sql);
$count=mysql_num_rows($result);

                        echo $count."</i></i><span class='network-name'></span> </a>";
                    }
                    else{

                    echo "</i></i><span class='network-name'></span> </a>";

                }?>



                    
                    </li>
                   

                    <li>
                    <a href="" data-toggle="dropdown" class="dropdown-toggle">Listings<i class="fa  fa-book fa-fw"></i> <span class="network-name"></span> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="listing/post_listing.php">Post Listing</a></li>

                                        <li><a href="listing/mylistings.php">My Listing</a></li>
                                        <li><a href="listing/view_listings.php">All Listings</a></li>

                                        

                    

                                     </ul>
                    </li>
                    <li>
                    <a href="" data-toggle="dropdown" class="dropdown-toggle">Account<i class="fa  fa-cogs fa-fw"></i> <span class="network-name"></span> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="profile/myprofile.php">Profile</a></li>

                                       
                                        

                                        

                    

                                     </ul>
                    </li>
                    
                    
                    <li >
                    <?php  if (!isset($_SESSION['usrnm'])) {
                            echo "<a href='login/alt_login.php'>Log In<i class='fa  fa-power-off fa-fw'></i> <span class='network-name'></span> </a>";
     
} else{
   echo "<a href='#''>".$_SESSION['usrnm']."<i class='fa  fa-user fa-fw'></i> <span class='network-name'></span> </a>
   <li>
    <a href='logout/logout.php'>Log Out<i class='fa  fa-power-off fa-fw'></i> <span class='network-name'></span> </a>
                    </li>";

} ?>
                    </li>
                    
                    
                    
                  
                    
                  
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   