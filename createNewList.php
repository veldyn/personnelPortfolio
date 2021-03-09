<?php


include 'db_connection.php';
$conn = OpenCon();
$link=$conn;
$company_name = $_POST['company_name'];
$position_title = $_POST['position_title'];
$locationInt = $_POST['locationInt'];
$position_field = $_POST['position_field'];
    $sql = "SELECT fieldID FROM fields WHERE field_name = '$position_field';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $fieldID = $row['fieldID'];
    $descriptions = $_POST['description'];
    $additional_information = mysqli_real_escape_string($link,$_POST['additional_information']);
   
 
     
    $sql = "INSERT INTO listing2 (company_name, position_title, locationInt, position_fieldID, description, additional_information) VALUES ('$company_name', '$position_title', '$locationInt', '$fieldID', '$descriptions', '$additional_information');";
     
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }