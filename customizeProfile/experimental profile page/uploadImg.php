<?php

if (isset($_POST['submit'])) {   // If the button is pressed
    $file = $_FILES['file'];

    // All the information about the file
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // Separate the file and extension with explode
    $fileExt = explode('.', $fileName);

    // Get the extension of the file we just uploaded
    $fileActualExt = strtolower(end($fileExt));

    // Array of extensions allowed: common image extensions
    $allowed = array('jpg', 'jpeg', 'png');


    if (in_array($fileActualExt, $allowed)) {              // If the extension is allowed

        if ($fileError === 0) {                            // If we have no errors with uploading the file

            if ($fileSize < 500000) {                    // If the file is not too big                
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;     // Create a new and unique file name            
                $fileDestination = 'profileImages/' . $fileNameNew;       // Where we want to save the file
                move_uploaded_file($fileTmpName, $fileDestination);     // Actually saving the file
                header()
            } else {
                echo "The file is too big";
            }
        } else {
            echo "There was an error uploading the file";
        }
    } else {
        echo "Invalid File Type. Please upload a JPG or PNG image";
    }
}
