<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "publication"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
?>