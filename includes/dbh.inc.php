<?php
$dbServername = "fdb19.awardspace.net";
$dbUserName = "3115764_cmreport";
$dbPassword = "5Mondes51!";
$dbName = "3115764_cmreport";
$conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName) or die ("Couldn't connect to database: " . mysqli_connect_error());