<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrapHeader_style.css">
    <link rel="stylesheet" href="bootstrapFooter_style.css">
    <link rel="stylesheet" href="bootstrapLogin2_style.css">

<?php
include "php/config.php";
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
		
	    $userIDNum = "SELECT id FROM accountCreation where username ='".$username."'";
            $idNumeSet = mysqli_query($con, $userIDNum);
       	    $userIDNumber = mysqli_fetch_assoc($idNumeSet);

            $_SESSION['userID'] = $userIDNumber['id'];
            $_SESSION['accountID'] = $accountType['userRole'];
	    $_SESSION['username'] = $username;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>



</head>

<body>
<br><br><br><br><br>
<h1 style="text-align:center;">Sign In</h1>
    <!------ Include the above in your HEAD tag ---------->
    
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                </div>

                <div style="padding-top:30px" class="panel-body">

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" role="form" method="POST" >

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="txt_username" type="text" class="form-control" name="txt_username" value="" placeholder="username">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="txt_password" type="password" class="form-control" name="txt_pwd" placeholder="password">
                        </div>






                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls" style="margin: auto;">
                                <input class="btn btn-success" type="submit" value="Login" name="but_submit" id="submit">


                            </div>
                        </div>


                       
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>

    </div>
<div style="height:300px;"></div>
</body>

</html>
