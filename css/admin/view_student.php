<?php ob_start();
	include "include/dbc.php";
    include "include/session.php";	
	
$student_id = $_REQUEST['id']; 


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
                <h2>New User Registration</h2>
			</div>	
			<br><br>
				
				<?php
	$get_student_details = mysql_query("SELECT *FROM personal where pid='$student_id'");
				
	$fetch_student=mysql_fetch_array($get_student_details);
			?>
			
		 <div class="row contact-wrap"> 
	
            <form name="contact-form" method="post" >
		<table border="1" align="left" cellspacing="30" cellpadding="10">
           
		       <tr>
                <td><label> Name : </label></td>
				<td><?php echo $fetch_student['name']; ?></td>     
               </tr>	
				
				
				<tr>	
              <td><label>Address : </label></td>
             <td> <?php echo $fetch_student['address']?></td> 
			    </tr>
				
		<tr>		
           <td> <label>City :</label></td>
		   <td> <?php echo $fetch_student['city']; ?></td>   
		</tr>	
			
			
			<tr>
		<td><label>Date Of Birth :</label></td>
		  <td> <?php echo $fetch_student['dob']; ?></td>    </tr>
				
			<tr>	
           <td><label>Age :</label></td>
	       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <td> <?php echo $fetch_student['age']; ?></td>   </tr>			
	    
			
            <tr>			
           <td> <label>State : </label></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <td><?php echo $fetch_student['state']; ?></td>
		</tr>
			
			
			<tr>
			 <td> <label>Pin Code : </label></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <td><?php echo $fetch_student['pcode']; ?> </td>
			  </tr>	
			
			<tr>
			<td><label>E-mail Id : </label></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <td><?php echo $fetch_student['email']; ?> </td>
			 </tr>  
       </table>		
	
	
		<table border="1" style="margin-top:-22px;" align="center" cellspacing="0" cellpadding="10">		
               
			   <tr>
			    <td> <label>Ration Card Id : </label></td>&nbsp;&nbsp;
                <td><?php echo $fetch_student['ration']; ?> </td>
			   </tr>
                
				<tr>
			      <td><label>Aadhar Cardno : </label></td>
				   <td>
                    <?php echo $fetch_student['adhar']; ?></td> 
			     </tr>				

			<tr>	  
			<td><label>Pan Card No : </label></td>
			<td> <?php echo $fetch_student['pan']; ?></td> 
			</tr>
				
			
			<tr>	
              <td> <label>Applied Course Name : </label></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <td><?php echo $fetch_student['course']; ?></td> 
		    </tr>	
				
			
			<tr>	
		      <td><label>Income Cerfificate : </label></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <td><?php echo $fetch_student['income']; ?> </td>
		   </tr>	
				
	           
			   
			   <tr>			
  				
                   <td><label>School/College Name : </label></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <td> <?php echo $fetch_student['school']; ?> </td>
			   
				</tr>
				
				
				<tr>
			
                   <td><label>Course Duration : </label></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <td> <?php echo $fetch_student['duration']; ?></td> 
			   
				</tr>
				
				<tr>
				
                   <td><label>Loan Amount : </label></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <td><?php echo $fetch_student['loan']; ?>
                     </td>					
			   
				</tr>
			</table>	
			</div>			
		</div>				
		
					
			<?php
				$current_status = $fetch_student['status'];
				
				if($current_status==0){
			?>
			
			  <div class="different">
			<input type="submit" name="v1" value="verify"> </div>
			
			<?php
				}
			?>
			
	


</form>
            

			
				<?php
					if(isset($_POST['v1'])){
						$status = 1;
						$update_user = mysql_query("UPDATE personal SET status='$status' WHERE pid='$student_id'");
						
						if($update_user){
							header("location:verified.php");
						}else{
							echo '<script>
								alert("Sorry data not updated. Try again")
							</script>';
						}
					}  
				  ?>
				  
<br/><br><br>
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
	