				   
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
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
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
       
                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
	
	
	
	
    <section id="contact-page">
        <div class="container">
            <div class="center">  
                   <br>			
                <h2>Verified Details</h2>
			</div>	
			<br><br>


	

				  
	<form name="form1" method="post" action="#">
	<table border="1" align="center" cellspacing="0" cellpadding="20">
						<tr>
							<th> Name</th>
							<th> Age</th>
							<th> State </th>
							<th> Pin Code</th>
							<th> Ration Card No</th>
							<th> Adhar Card No</th>
							<th> Pan Card No</th>
							<th> Applied Course Name</th>
							<th> School/College Name</th>
							<th> Course Duration</th>
							<th> Loan Amount</th>
   						
		</tr>
		
		
	<?php ob_start();
	include "include/dbc.php"; 
	include "include/session.php";
	 
	$qry=mysql_query("select * from personal where status=1");
	$no=mysql_num_rows($qry);
	if($no>0)
	{
	

			while($row=mysql_fetch_array($qry))
			{
		?>
							
									
						<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['age']; ?></td>
				<td><?php echo $row['state']; ?></td>
				<td><?php echo $row['pcode']; ?></td>
				<td><?php echo $row['ration']; ?></td>
		        <td><?php echo $row['adhar']; ?></td>
				<td><?php echo $row['pan']; ?></td>
				
				<td><?php echo $row['course']; ?></td>
				<td><?php echo $row['school']; ?></td>
				<td><?php echo $row['duration']; ?></td>
				<td><?php echo $row['loan']; ?></td>
		</tr>
				<?php
			      }
		       ?>
		<?php
	}
	else
	{
		echo "Sorry No Records Found";
	}

?>        </form> 
		</table>
	  </div>
	  
<br/><br><br><br><br><br>
		</div><!--/.container-->
    </section><!--/about-us-->

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
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>				  
		  
	</body>
</html>