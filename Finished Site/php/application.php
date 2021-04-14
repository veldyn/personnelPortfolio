<?php
session_start();

include 'db_connection.php';
$conn = OpenCon();

if ($_SESSION['accountID']!= 'E'){
    $applicantID = $_SESSION['userID'];
    $listingID = $_POST['listingID'];

    $sql = "INSERT INTO applications (applicantID,listingID) VALUES ('$applicantID','$listingID');"; 
    
    if ($conn->query($sql) === TRUE) {
        echo"<div class=\"logMessage\">You have successfully applied for this position</div>";
	header("refresh:2; url=https://personnelport.careers/index.php?page=jobs");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
else {
	echo "Only student accounts may apply";
}






?>
