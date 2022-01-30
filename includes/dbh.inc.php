<?php

$serverName = "sql6.freemysqlhosting.net";
$dbUsername = "sql6465341";
$dbPassword = "TNfcNVSuHu";
$dbName = "sql6465341";
$port = "3306";
/*
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "database01";*/

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $port);

if (!$conn) {
    die("Connection failed: ") . mysqli_connect_error();
}
?>
