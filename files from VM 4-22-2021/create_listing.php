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
<?php

} // end :: if
?>
