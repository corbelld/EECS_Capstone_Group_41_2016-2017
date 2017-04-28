<?php
//DB details
$dbHost = 'mysql.cs.orst.edu';
$dbUsername = 'cs440_yeja';
$dbPassword = '5271';
$dbName = 'cs440_yeja';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}