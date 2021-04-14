<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<head>
    <title>Personnel Portfolio</title>
    <link rel="shortcut icon" type="icon" href="images/pp.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- Bootstrap CSS/JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--CSS Files-->
    <link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapCreateListing_style.css">
    <link rel="stylesheet" href="bootstrapIndex_style.css">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        /* Add a gray background color and some padding to the footer */
    </style>
</head>

<body>
    <!-- HEADER START -->
    <div class="header">
        <div class="row">
            <div class="col-md-3">
                <div style="margin-left: 30px;">

                    <p style="text-align: left; font-size: 47px; font-family: 'Brush Script MT', cursive; color:black;">Personnel Portfolio
                    </p>
                </div>
            </div>
            <div class="col-md-9">

            </div>

        </div>
    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                     <?php
	
			if ($_SESSION['accountID']=='E') {
				echo '<li><a href="index.php">Home</a></li>';
				echo '<li><a href="index.php?page=jobs">Jobs</a></li>';
				echo '<li><a href="index.php?page=listings">Create Listings</a></li>';
				
						
			}
			elseif ($_SESSION['accountID']=='S') {
				echo '<li><a href="index.php">Home</a></li>';
        		        echo '<li><a href="index.php?page=jobs">Jobs</a></li>';
				
			}	
			else{
				echo '<li><a href="index.php">Home</a></li>';
        		        echo '<li><a href="index.php?page=jobs">Jobs</a></li>';
			}
			?>            
                </ul>
                <ul class="nav navbar-nav navbar-right">
                   <?php
        		if (isset($_SESSION['username'])) {

				if ($_SESSION['accountID']=='E'){
					echo '<li><a href="index.php?page=logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>';
					echo '<li><a  href="index.php?page=employer"><span class="glyphicon glyphicon-user"></span> Employer Profile</a></li>';
				}
				else{
        		    		echo '<li><a href="index.php?page=logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>';
        		    		echo '<li><a  href="index.php?page=profile"><span class="glyphicon glyphicon-user"></span> User Profile</a></li>';
       				}}
				
       			 else {
       			    echo '<li><a href="index.php?page=login"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>';  
       		            echo '<li><a href="index.php?page=createAccount">Create Account</a></li>';
            
      			  }
      		  ?>

			 
                </ul>
            </div>
        </div>
    <!-- HEADER END -->
   </nav>
