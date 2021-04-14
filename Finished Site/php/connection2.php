<?php
function OpenCon2()
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'p3rsonn3lp0rt4';
    $db = 'users';
    $conn2 = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn2 -> error);
return $conn2;
}
?>
