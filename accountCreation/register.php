<?php
        include 'connection.php';
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $emailAddress = $_POST['emailAddress'];
                $address = $_POST['address'];
                $username = $_POST['username'];
                $password = $_POST['password'];
        if($conn->connect_error){
             echo "$conn->connect_error";
             die('Connection Failed : '.$conn->connect_error);
          } 
      
        else {
                $stmt = $conn->prepare('insert into accountCreation(firstName, lastName, emailAddress, address, username, password) values(?, ?, ?, ?, ?, ?)');
                $stmt->bind_param("ssssss",$firstName, $lastName, $emailAddress, $address, $username, $password);
                $stmt->execute();
                echo "Registration Successful, please wait to be redirected.";
                header('refresh:5, url= customize-your-profile.php');
                $stmt->close();
                $conn->close();
        }
        // function duplicateEmail ($emailAddress) {
        //  $sql = "SELECT emailAddress FROM test WHERE emailAddress = '$emailAddress'";
        //  $emailResult = mysqli_query($conn, $sql);
        //  $existingEmail = mysqli_num_rows($emailResult);
        //  if ($existingEmail > 0) {
        //         echo "Username already exists";
        //         return false;
        //  }
        //  else{

        //  }
        // }

        // function duplicateUsername ($username) {
        //         $sql = "SELECT username FROM test WHERE username = '$username'";
        //         $usernameResult = mysqli_query($conn, $sql);
        //         $existingUsername = mysqli_num_rows($usernameResult);
        //         if ($existingUsername > 0) {
        //                echo "Username already exists";
        //                return false;
        //         }
        //         else{
       
        //         }
        //        }
?>