<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <meta charset="utf-8">
    <title>Personnel Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='style1.css'>
    
</head>

<body>
    <div class='wrapper'>

        <div class='header'></div>
        <!-- <div class='navbar'>
            <div class='button'><a href="../index.html">Home</a></div>
            <div class='button'><a href='index.php?page=internships'>Internships</a></div>
            <div class='button'><a href='index.php?page=listings'>Listings</a></div>
            <div class='button'><a href='index.php?page=employers'>Employers</a></div>

        </div> -->
        <!-- Below is the code for the header -->
        <header>
            <div class="header">
                <div class="headerLogo">
                    <a href="index.html" style="text-decoration: none; color: black">
                        <h1 style="text-align: left" width="30%">Personnel Portfolio</h1>
                    </a>
                </div>
                <ul class="navMenu">
                    <div class="navMenuItem">
                        <li><a href="create_listing.html">Create Listings</a></li>
                        <li><a href="listings.html">Listings</a></li>

                    </div>
                </ul>
                <hr />
            </div>
            <!-- End of the code for the header -->
            <div class='mainbody'>
                <div id="search_container">
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
                            <?php
                            include 'db_connection.php';
                            $conn = OpenCon();

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT CompanyName, Title, intLoc FROM Listings";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "Company Name: " . $row["CompanyName"] . "<br>" . " - Title: " . $row["Title"] . "<br>" . "- Location: " . $row["intLoc"] . " " . "<br>";
                                }
                            } else {
                                echo "0 results";
                            }

                            mysqli_close($conn);
                            ?>

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


                </div>
            </div>

            <div class='footer'>Personnel Portfolio</div>

    </div>





    <main>

    </main>


</body>

</html>