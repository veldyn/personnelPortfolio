<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "p3rsonn3lp0rt4"; /* Password */
$dbname = "users"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname) or die("Connect failed: %s\n". $con -> error);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
