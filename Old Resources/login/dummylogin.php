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
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>

<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_username" name="txt_username" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_username" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>