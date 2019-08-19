<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['user_spa']);
    $pwd = mysqli_real_escape_string($conn, $_POST['user_pwd']);

    //Error handlers
    //Check for empty fields
    if (empty($name) || empty($pwd)){
        header("Location: ../signup.php?signup=empty");
        exit();
    } else {
        //check if input char are valid
        if (!preg_match("/^[a-zA-Z]*$/", $name)){
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_spa='$name'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0) {
                header("Location: ../signup.php?signup=usertaken");
                exit();
            } else {
                //Hashing the password
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                //Insert the user into the database
                $sql = "INSERT INTO users (user_spa, user_pwd) VALUES ('$name', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: ../reporting.php?signup=success");
                exit();
            }
        }
    }

} else {
    header("Location: ../signup.php");
    exit();
}