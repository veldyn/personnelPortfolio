<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="/login_page_style.css">
<link rel="stylesheet" href="../css/create_listing.css">
<link rel="stylesheet" href="../css/intershipListing.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="/style1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php include 'navbar.php' ?>
//<?php
//if (isset ($_GET['listingID'])) {
//    include 'db_connection.php';
//    $ID = mysqli_real_escape_string($db, $_GET['listingID']);
//    if ($conn->connect_error) {
//                      die("Connection failed: " . $conn->connect_error);
//  }
//    $sql = "SELECT listingID FROM listing2 WHERE listingID = '.$ID.'";
//    $result = mysqli_query($conn, $sql);
//    $row = mysqli_fetch_array($result);
//    echo $row['listingID'];
//  if (isset($_GET['post'])){
//       $name = mysqli_real_escape_string($db, $_GET['listingID']);
//  }
// else{
// }
//}
//?>
<div class="content">
	<div class="row">
   		     <div class="col-sm-6">
	   		 <div class="lineHeightSpread">
				<h2>Name of Company:</h2>
					<p><?php echo $row['listingID'] ?></p>
				<h2>Job Position</h2>
					<p></p>
				<h2>Job Info:</h2>
					<p></p>
				<h2>Location:</h2>
					<p></p>
				<h2>Wage:</h2>
          		 </div>
       			 <button class="btn">Interested? Click Here</button>
     		     </div>
		     <div class="col-sm-6">
				<div class="companyBox">
					<div class="fullWidth" style="text-align: center">
					<h2>Find a new opportunity</h2>
					<br>
					<img src="https://personnelport.careers/images/download.jpg" alt="img" />
					<p>Company Info: Lorem ipsum dolor sit amet, adipisci volutpat suscipiantur ut eos, pro utamur sententiae id, est eligendi iracundia eu. Aperiri dolorum cu sit. Nec movet graece efficiendi in. Vel at meis suscipit splendide, te quo latine.</p>
					<br><br><br><a href="#forSkipping"><p style="vertical-align: text-bottom; text-align: right"><br><br><br><br><br><br><br><br><br><br>Skip ></a></p>
				        </div>
			        </div>
                     </div>
        </div>
</div>
<?php include 'footer.php' ?>
