<?php
//DB details
$dbHost = 'oniddb.cws.oregonstate.edu';
$dbUsername = 'corbelld-db';
$dbPassword = 'mKHNIf4DD3FkE08K';
$dbName = 'corbelld-db';
//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}