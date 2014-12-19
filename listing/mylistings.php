<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    
    <!-- popote css -->
    <link href="../css/mystyle.css" rel="stylesheet">
    <link href="../css/nav.css" rel="stylesheet">

    <!-- fonts -->
    <link href="../font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- goofle fonts -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

    <!-- jasny -->
     <link href="../jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" media="screen">
    <link href="../jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
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

                                        <li><a href="post_listings.php">Post Listing</a></li>

                                        <li><a href="mylistings.php">My Listing</a></li>
                                        <li><a href="view_listings.php">Other Listings</a></li>

                                        

                    

                                     </ul>
                    </li>
                    
                    <li>
                        <a href="#">Your Trips<i class="fa  fa-bus fa-fw"></i> <span class="network-name"></span> </a>
                    </li>
                    <li >
                        <a href="#">Profile<i class="fa  fa-user fa-fw"></i> <span class="network-name"></span> </a>
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

    <div class="row">
    <div class="container">
    	

    	<div class=" col-md-offset-1 col-md-8">
        <h1 align="center">My Listings</h1>
    
    	</div>
    </div>
    </div>




	<!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script language="javascript" type="text/javascript" src="../datepicker/datetimepicker.js"></script>


<!-- jasny -->
    <script src="../jasny-bootstrap/js/jasny-bootstrap.js"></script>
    <script src="../jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
</body>
</html>