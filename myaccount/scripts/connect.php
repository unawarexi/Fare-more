<?php
$servername = "localhost";
$username = "codeexpe_suissuser";
$password = "codeexpe_suissdb";
$dbname = "codeexpe_suissdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

?>