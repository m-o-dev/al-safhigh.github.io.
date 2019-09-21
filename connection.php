<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbn = "dbdictionary";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>