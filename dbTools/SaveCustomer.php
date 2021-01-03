<?php

include_once '../DBConn/DataConn.php';

$first = mysqli_real_escape_string($conn, $_POST['form_first_name']);

$sql = "INSERT INTO Customer (first_name) VALUES ('$first');";

mysqli_query($conn, $sql);

header("Location: ../index.php?save=success");

?>