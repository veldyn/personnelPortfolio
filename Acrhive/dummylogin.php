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
	 

	    $accountID = "SELECT userRole FROM accountCreation where username ='".$username."'";
            $idSet = mysqli_query($con, $accountID);
	    $accountType = mysqli_fetch_assoc($idSet);

            $_SESSION['accountID'] = $accountType['userRole'];
	    $_SESSION['username'] = $username;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>

<br>
<br>
<br>
<form  method="POST" action="">
            <h1 style="text-align: center;">Login</h1>
	<br>      
      <table>
                
                <tr>
                    <td class="width2">Username:</td>
                    <td class="width"><input type="username"  class="textbox"  name="txt_username" id="txt_username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td class="width2">Password:</td>
                    <td class="width"><input class="textbox" type="password" name="txt_pwd" id="txt_username" placeholder="Password"></td>
                </tr>
            </table>
            <br>
            <p style="text-align: center;">
                <input style="text-align: center;" class="width1" type="submit" value="Enter" name="but_submit" id="submit"><br><br><br><br><br><br><br><br><br><br>
            </p>
        </form>

