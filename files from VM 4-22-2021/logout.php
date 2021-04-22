
<?php 
unset($_SESSION['username']);
unset($_SESSION['accountID']);
echo"<div class=\"logMessage\">You have successfully logged out</div>";
header("refresh:2; url=index.php");
?>
