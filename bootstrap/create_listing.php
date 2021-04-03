<?php
session_start();
    if(isset($_SESSION["message"]))
    {
        echo "<script>";
  	echo "alert('Listing created successfully!');";
   	echo "</script>";
        unset($_SESSION["message"]);
    }


?>


    

    <?php
        
        if ($_SESSION['accountID']!='E') {
            echo '<div>Please Login with an Employer account</div>';
                                                
        }
             
        else{
                
                
        
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Bootstrap Simple Login Form with Blue Background</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapCreateListing_style.css">
</head>

<body>
  <div class="signup-form">
        <form action="php/createNewList.php" method="post">
            <h2>Create Listing</h2>

            <hr>
            <div class="form-group">
                <label for="position_title">Company Name:</label>
                <input type="companyName" class="form-control" id="company_name" name="company_name" placeholder="Company Name" required="required">
            </div>

            <div class="form-group">
                <label for="position_ID">Position Title:</label>
                <input type="positionTitle" class="form-control" id="position_title" name="position_title" placeholder="Position Title" required="required">
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="locationInt" class="form-control" id="locationInt" name="locationInt" placeholder="Location" required="required">
            </div>

            <!--  -->
            <div class="form-group">
                <label for="location">Position Field:        </label>
                <select class="width" id="position_field" name="position_field" required>
                    <option>IT</option>
                    <option>Engineering</option>
                    <option>Medical</option>
                    <option>Culinary</option>
                    <option>Art/Design</option>
                </select>

            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" cols="40" rows="10" placeholder="Enter the description:" required></textarea>

            </div>




            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Submit Listing</button>
            </div>
        </form>

    </div>
</body>

</html>
<?php

} // end :: if
?>
