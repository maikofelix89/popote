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
                <a class="navbar-brand" href="index.jsp" ><i class="fa fa-home"></i></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#">Dashboard<i class="fa  fa-users fa-fw"></i> <span class="network-name"></span> </a>

                    </li>
                    <li>
                        <a href="#">Inbox<i class="fa  fa-envelope fa-fw"></i> <span class="network-name"></span> </a>
                    </li>
                   

                    <li>
                    <a href="" data-toggle="dropdown" class="dropdown-toggle">Listings<i class="fa  fa-book fa-fw"></i> <span class="network-name"></span> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="post_listing.php">Post Listing</a></li>

                                        <li><a href="mylistings.php">My Listing</a></li>
                                        <li><a href="view_listings.php">Other Listings</a></li>

                                        

                    

                                     </ul>
                    </li>
                    
                    <li>
                        <a href="#">Your Trips<i class="fa  fa-bus fa-fw"></i> <span class="network-name"></span> </a>
                    </li>
                    <li >
                    <?php  if (!isset($_SESSION['usrnm'])) {
                            echo "<a href='../index.php'>Log In<i class='fa  fa-power-off fa-fw'></i> <span class='network-name'></span> </a>";
     
} else{
   echo "<a href='#''>".$_SESSION['usrnm']."<i class='fa  fa-power-off fa-fw'></i> <span class='network-name'></span> </a>
   <li>
    <a href='../logout/logout.php'>Log Out<i class='fa  fa-power-off fa-fw'></i> <span class='network-name'></span> </a>
                    </li>";

} ?>
                    </li>
                     <li>
                        <a href="#">Account<i class="fa  fa-cogs fa-fw"></i> <span class="network-name"></span> </a>
                    </li>
                    
                    
                  
                    
                  
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   