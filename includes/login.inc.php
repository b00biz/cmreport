<?php

session_start();

if (isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['user_spa']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //check if empty

    if (empty($name) || empty($pwd)){
        header("Location: ../index.php?login=empty");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_spa='$name'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //Dehashing pwd
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../index.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck == True) {
                    //log in the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_spa'] = $row['user_spa'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
            }
        }
    }

} else {
        header("Location: ../index.php?login=error");
        exit();
}