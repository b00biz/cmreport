<?php
$dbServername = "fdb19.awardspace.net";
$dbUserName = "";
$dbPassword = "";
$dbName = "";
$conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbName) or die ("Couldn't connect to database: " . mysqli_connect_error());
