<?php
          $firstName = $_POST['firstName'];
          $lastName = $_POST['lastName'];
          $emailAddress = $_POST['emailAddress'];
          $address = $_POST['address'];
          $username = $_POST['username'];
          $password = $_POST['password'];

          // Database Connection
          $dbhost = 'localhost';
          $dbuser = 'root';
          $dbpass = 'p3rsonn3lp0rt4';
          $db = 'test';
          $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

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
?>
