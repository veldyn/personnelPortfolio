<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <meta charset="utf-8">
    <title>Personnel Portfolio</title>
    <link rel="stylesheet" href="/personnelPortfolio/style.css">
    <link rel="stylesheet" href="/almostComp/css/create_listing.css">
	<link rel="stylesheet" href="loginPage_style.css">    
</head>

<body>
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
                    <li><a href="listings.php">Listings</a></li>

                </div>
            </ul>
            <hr />
        </div>
    </header> 

    <main>
        <br><br>
        <form action="thankyou.html" id="regForm" method="POST" enctype="text/plain">
            <h1 style="text-align: center;">Login</h1>
            <table>
                
                <tr>
                    <td class="width2">Username:</td>
                    <td class="width"><input class="width" type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td class="width2">Password:</td>
                    <td class="width"><input class="width" type="text" name="password" id="password"></td>
                </tr>
            </table>
            <br>
            <p style="text-align: center;">
                <input style="text-align: center;" class="width1" type="submit" value="Enter" name="submit"><br><br><br><br><br><br><br><br><br><br>
            </p>
        </form>
    </main>
    <footer>

        <!-- Address tag centered and button which brings you back to top of page -->
        <address id="Footer">
            <a id="button" href="loginPage.php">Back to Top</a><br><br>
            <div class="rowFooter">
                <div class="columnFooter">
                    <!--contact, support, and about sample information provided in footer-->
                    <h3>Contact</h3>
                    <p style=color:gray;>2150 Virginia Street, New York, NY 60154<br> 555-555-5555<br> name@company.com
                    </p>
                </div>
                <div class="columnFooter">
                    <h3>Support</h3>
                    <p style=color:gray;>Terms and Conditions <br> Privacy Policy <br> Return Policy</p>
                </div>
                <div class="columnFooter">
                    <h3>About</h3>
                    <p style=color:gray;>About <br> News <br> Contact</p>
                </div>
            </div>
        </address>
    </footer>

</body>

</html>
