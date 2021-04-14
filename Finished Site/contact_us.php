<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapLogin_style.css">
 <link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapLogin_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapCreateListing_style.css">
<link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapLogin_style.css">
    <style>
         .about_us_text {
            font-size: 16px;
        }
        
        .about_us_page_container {
            border: 2px solid black;
            margin: auto;
            width: 50%;
            margin-top: 75px;
            border-radius: 10px;
            margin-bottom: 100px;
        }
        
        label {
            color: black;
        }
	a {
	color: rgb(68, 98, 0);
}
    </style>

</head>

<body>
   <!-- HEADER START -->
    <div class="header">
        <div class="row">
            <div class="col-md-3">
                <div style="margin: auto; margin-left: 30px;">

                    <p style="text-align: left; font-size: 47px; font-family: 'Brush Script MT', cursive;">Personnel Portfolio
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
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Jobs</a>
                    </li>
                    <li>
                        <a href="#">Create Listing</a>
                    </li>
                    <li>
                        <a href="#">Employers</a>
                    </li>
                    <!-- Employers could be kind of like an employer profile page. It can have information about the company or something idrk -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- HEADER END -->

    <!--form code  -->

    <!--  -->
    <div class="container-fluid text-center text-md-left about_us_page_container">
        <h1 style="text-decoration: underline;">Contact Us</h1>
        <p class="about_us_text">If you have any questions or concerns, please use the information below to contact us or complete the form.</p>



        <div class="signup-form">
            <p class="about_us_text" style="text-decoration: underline;">Enter your information:</p>
            <form action="/examples/actions/confirmation.php" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="firstName" style="float: left;">First Name:</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                        <div class="col-xs-6">
                            <label for="lastName" style="float: left;">Last Name:</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" style="float: left;">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>

                <div class="form-group">
                    <label for="phoneNumber" style="float: left;">Phone Number:</label>
                    <input type="phone" class="form-control" name="phone" placeholder="Phone Number" required="required">
                </div>

                <div class="form-group">
                    <label for="location" style="float: left;">Message:</label>
                    <input type="location" class="form-control" name="location" placeholder="Enter a brief message" required="required" style="height: 200px;">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Submit Response</button>
                </div>
            </form>


            <br>
            <p class="about_us_text"><strong>Personnel Portfolio LLC.</strong>
                <br> 2150 Virginia Street, New York, NY 60154
                <br> 555-555-5555
                <br> <a href="mailto:name@company.com">name@company.com</a>
            </p>
            <br>
        </div>
  </body>

</html>
