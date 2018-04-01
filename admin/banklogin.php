<?php ob_start();
	include "include/dbc.php";
    	
	?>
	
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Online Loan Recovery System</title>
    
    <!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    
        
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Online Loan Recovery System</a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                                  <li class="active"><a href="#.php">Bank Login</a></li> 
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>BANK-SBI </h2>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form class="contact-form" name="contact-form" method="post" enctype="multipart/form-data">
                    <div class="col-sm-5 col-sm-offset-3">
					
                        <div class="form-group">
                            <label>Bank Login </label>
                            <input type="text" name="blogin" class="form-control" required>
                        </div>
												
							<div class="form-group">
                            <label> Password </label>
                            <input type="text" name="pwd" class="form-control" required>
                        </div>
						
						
                        <div class="form-group">
                            <button type="submit" name="s1" class="btn btn-primary btn-lg">Submit Message</button>
                        </div>
                    </div>
				</div>	
                </form>
                <?php
					if(isset($_POST['s1']))
					{
						extract($_POST);
							
	                    if($blogin=="sbi" && $pwd=="sbi")
							{
						session_start();
						$_SESSION['name']="admin";
					header("location:bankview.php");
							}
						}
						?>
					
					
				 
								


				</div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	<br><br><br><br><br><br><br><br><br>
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="contact-us.php">Post Add</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>