<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapCreateAccount_style.css">

</head>

<body>
    
    <!-- Below code was copied from create_listing.php from the server -->
    <div class="signup-form">
        <form action="php/register.php" id="regForm" method="post">
            <h2>Reset Password</h2>
            <p>Please fill in this form to reset your password!</p>
            <hr>
            <div class="form-group">
                <label for="email"><strong style="color:black;">Email:</strong></b></label>
                <input class="form-control" placeholder="Email" type="text" name="email" id="email" required>
            </div>
            <!-- <div class="form-group">
                <div class="row">
                    <div class="col-xs-6"><input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required="required"></div>
                    <div class="col-xs-6"><input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required="required"></div>
                </div>
            </div> -->
            <!-- <div class="form-group">
                <input type="email" class="form-control" name="emailAddress" id="emailAddress" placeholder="Email" required="required">
            </div> -->


            <!--  -->
            <label for="accountype"><strong style="color: black;">Select account type:</strong></label>
            <div class="form-group">

                <div class="col-xs-6"><label for="student"><input type="radio" name="userRole" id="e" value="e"
                            required="required"> Student</label></div>

                <div class="col-xs-6"><label for="employer"><input type="radio" name="userRole" id="s" value="s"
                            required="required"> Employer</label></div>
                <br>
            </div>


            <!--  -->
            <div class="form-group">
                <label for="newPassword"><strong style="color:black;">Enter New Password:</strong></b></label>
                <input class="form-control" placeholder="New Password" type="text" name="newPassword" id="newPassword" required>
            </div>
            <div class="form-group">
                <label for="newPassword"><strong style="color: black;">Confirm New Password:</strong></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Submit" name="submit">
            </div>
        </form>
    </div>
    <br><br>

    <!-- End of the code that was copied from the server -->

</body>

</html>
