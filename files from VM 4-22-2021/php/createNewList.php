<?php

session_start();
include 'db_connection.php';
$conn = OpenCon();
$link=$conn;
$company_name =mysqli_real_escape_string($link, $_POST['company_name']);
$position_title =mysqli_real_escape_string($link, $_POST['position_title']);
$locationInt =mysqli_real_escape_string($link, $_POST['locationInt']);
$position_field = $_POST['position_field'];
    $sql = "SELECT fieldID FROM fields WHERE field_name = '$position_field';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $fieldID = $row['fieldID'];
    $descriptions = mysqli_real_escape_string($link,$_POST['description']);
   
   
 
     
    $sql = "INSERT INTO listing2 (company_name, position_title, locationInt, position_fieldID, description) VALUES ('$company_name', '$position_title', '$locationInt', '$fieldID', '$descriptions');";
     
     if ($conn->query($sql) === TRUE) {  
        echo "<script>alert('Success!');</script>";     
#       echo "<meta http-equiv="refresh" content="5; URL=https://personnelport.careers/index.php?page=listings">";
        
        header('Location: https://personnelport.careers/index.php?page=listings');
        $_SESSION['message'] = 'success';
        
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>
