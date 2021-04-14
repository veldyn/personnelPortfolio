<style>

.logMessage{
padding: 5px;
padding-top: 20px;
padding-bottom: 20px;
text-align: center;
border: 3px solid black;


</style>



<?php 



unset($_SESSION['username']);
unset($_SESSION['accountID']);
echo"<div class=\"logMessage\">You have successfully logged out</div>";
header("refresh:5; url=index.php");






?>
