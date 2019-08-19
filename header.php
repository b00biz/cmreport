<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporting Cinq Mondes</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/logstyle.css">

</head>

<body>


    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php"><img src="pics/logocm.png" width=200px;></a></li>
                </ul>
                <div class="nav-login">
                    <form action="includes/login.inc.php" method="POST">
                        <input type="text" name="user_spa" placeholder="Spa">
                        <input type="password" name="pwd" placeholder="password">
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>
                </div>
            </div>
        </nav>

    </header>