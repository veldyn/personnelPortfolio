<?php
include 'db_connection.php';
$conn = OpenCon();
$query = "SELECT * FROM Listing";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)){
    echo "".$row[CompanyName]."".$row[Title]."<br>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
    <meta charset="utf-8">
    <title>Personnel Portfolio</title>
    <link rel='stylesheet' href='style1.css'>
</head>

<body>
    <div class='wrapper'>
    
	<div class='header'></div>
      <div class='navbar'>
        <div class='button'><a href='index.php'>Home</a></div>
        <div class='button'><a href='index.php?page=internships'>Internships</a></div>
        <div class='button'><a href='index.php?page=listings'>Listings</a></div>
        <div class='button'><a href='index.php?page=employers'>Employers</a></div>
          
        </div>

        <div class='mainbody'><div id="search_container">
            <div id="listing_label">
                <h1>Internships</h1>
            </div>

            <div id="filter_result">
                <h2>Filter Results</h2>
            </div>
        </div>

        <div id="listing_container">
            
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            <div id="job_listing_container">
                
                <img src="images/Google_Logo.png" alt="Google Logo" width=100 height="100" />
                <div id="listing_Text">
                <p>Title
                    <br>Company
                    <br>Location
                    <br>Description
                </p>
                </div>
            </div>
            

        </div></div>

        <div class='footer'>Personnel Portfolio</div>

        </div>

      
    
    

    <main>
        
    </main>


</body>
</html>