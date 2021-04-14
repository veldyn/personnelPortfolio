<?php
session_start();
?>
</head>
<body>
<div class="wrapper1">
    <div class="header"></div>
        <div class='navbar'>
	<div class='button'>
	<?php
	
	if ($_SESSION['accountID']=='E') {
		echo '<a href="index.php">Home</a>';
		echo '<a href="index.php?page=jobs">Jobs</a>';
		echo '<a href="index.php?page=listings">New Listings</a>';
		echo '<a href="index.php?page=employers">Employers</a>';
						
	}
	elseif ($_SESSION['accountID']=='S') {
		echo '<a href="index.php">Home</a>';
                echo '<a href="index.php?page=jobs">Jobs</a>';
		echo 'loser';
	}	
	else{
		echo '<a href="index.php">Home</a>';
                echo '<a href="index.php?page=jobs">Jobs</a>';
	}
	?>
	</div>
<!--        <div class='button'><a href='index.php'>Home</a></div>
        <div class='button'><a href='index.php?page=jobs'>Jobs</a></div>
	<div class='button'><a href='index.php?page=listings'>New Listings</a></div>
        <div class='button'><a href='index.php?page=employers'>Employers</a></div>  -->

        <div class="buttonRight" id="navbarRight">
        <?php
        if (isset($_SESSION['username'])) {
            echo '<a href="index.php?page=logout">Log out</a>';
            echo '<a  href="./php/userProfile.php">User Profile</a>';
        }
        else {
            echo '<a href="index.php?page=login">Sign In</a>';  
            echo '<a href="index.php?page=createAccount">Create Account</a>';
            
        }
        ?>  
        </div>
    </div>

    
              
    
