<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $username = mysqli_real_escape_string($con,$_POST['txt_username']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from accountCreation where username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: home.php');
        }else{
            echo "Invalid username and password!";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <meta charset="utf-8">
    <title>Personnel Portfolio</title>
    <link rel="stylesheet" href="/personnelPortfolio/style.css">
    <link rel="stylesheet" href="/almostComp/css/create_listing.css">
	<link rel="stylesheet" href="login_style.css">   
</head>

<div class="container">
    <form id="div_login" method="POST" action="" enctype="text/plain">
            <h1 style="text-align: center;">Login</h1>
            <table>
                
                <tr>
                    <td class="width2">Username:</td>
                    <td class="width"><input type="text" class="textbox" id="txt_username" name="txt_username" placeholder="Username" /></td>
                </tr>
                <tr>
                    <td class="width2">Password:</td>
                    <td class="width"><input type="password" class="textbox" id="txt_username" name="txt_pwd" placeholder="Password"/></td>
                </tr>
            </table>
            <br>
            <p style="text-align: center;">
                <input style="text-align: center;" class="width1" type="submit" value="Submit" name="but_submit" id="but_submit" /><br><br><br><br><br><br><br><br><br><br>
            </p>
        </form>
    </main>