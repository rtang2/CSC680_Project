<?php

session_start();

$dbPassword = "phpadmin!@#";
$dbUserName = "php";
$dbServer = "localhost";
$dbName = "proj680";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

/*
echo "<pre>";
print_r($connection);
echo "<pre>";
*/

if($connection->connect_errno)
{
    //echo "Database Connection Failed. Reason: ".$connection->connect_error;
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}
?>