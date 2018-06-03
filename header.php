<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title>Project Delivery Webform</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->
    
	<script src="js/jquery.min.js"></script>  
    <script src="js/jq.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse">
      	  <div class="container-fluid" style="text-align:center;">
           <a class="navbar-logo" href="profile.php"><img src="images/CAPMOLogo.png" alt="California State"></a>

		  <a class="navbar-brand pull-left" href="http://www.ca.gov"><img src="images/govblue.png" alt="California State"></a>
		<div>
		<h1 class="headertitle">DSIA CI/CD DEMO-101</h1>
		</div>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse nav navbar-nav navbar-right" style="margin-right: 15px; border:none;">

          
		  <?php
				if(!isset($_SESSION['uid']))
					{
					?>
				
				<a href="register.php"><button type="button" class="btn btn-primary navbar-btn">REGISTER</button></a>
			    <a href="index.php"><button type="button" class="btn btn-primary navbar-btn">LOGIN</button></a>

				<?php
					}
				else
					{
					?>
				<a href="logout.php"><button type="button" class="btn btn-primary">LOG OUT</button></a>
				<?php
				    }
				 ?>
				 
        </div>
      </div>
    </div>
