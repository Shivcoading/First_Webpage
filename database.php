<?php
$server="sql6.freesqldatabase.com";
$username="sql6682215";
$password="@Shivam123";
$database = "aws-database";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
  die("Error Detected".mysqli_error($conn));
}
?>