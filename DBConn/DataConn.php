<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "Password58";
$dbName = "airtitewebquotes";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}

?>