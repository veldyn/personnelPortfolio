<?php
session_start();
?>

<link rel='stylesheet' href='css/navbar.css'>




<body>
<div class="wrapper1">
    <div class="header"></div>
        <div class='navbar'>
        <div class='button'><a href='index.php'>Home</a></div>
        <div class='button'><a href='index.php?page=internships'>Internships</a></div>
        <div class='button'><a href='index.php?page=listings'>Listings</a></div>
        <div class='button'><a href='index.php?page=employers'>Employers</a></div>
        
        <div class="buttonRight" id="navbarRight">
        <?php
        if (isset($_SESSION['username'])) {
            echo '<a href="/php/logout.php">Log out</a>';
            echo '<a  href="./php/userProfile.php">User Profile</a>';
        }
        else {
            echo '<a href="/php/loginPage.php">Sign in</a>';  
            echo '<a href="./php/accountCreation.php">Sign up</a>';
            
        }
        ?>  
        </div>
    </div>
</body>
    
              
    
</nav>