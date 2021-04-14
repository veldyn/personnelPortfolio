<?php
        include 'connection.php';
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $emailAddress = $_POST['emailAddress'];
        $address = $_POST['address'];
        $userRole = $_POST['userRole'];
        $username = $_POST['username'];
        $password = $_POST['password'];

         if($conn->connect_error){
             echo "$conn->connect_error";
             die('Connection Failed : '.$conn->connect_error);
         }
        else {
                $stmt = $conn->prepare("insert into accountCreation(firstName, lastName, emailAddress, address, userRole, username, password) values(?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssss",$firstName, $lastName, $emailAddress, $address,$userRole, $username, $password);
                $stmt->execute();
                echo "Registration Successful, please wait to be redirected.";
                header('refresh:5, url=index.php');
                $stmt->close();
                $conn->close();
        }

?>
