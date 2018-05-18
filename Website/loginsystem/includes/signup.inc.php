<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handelers
    //checking for empty fields
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
        header("Location: ../signup.php?message=input-empty");
        exit();
    } else {
        //Cheeck if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../signup.php?message=name-wrong");
            exit();
        }else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php?message=email-wrong");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$email'";
                $result = mysqli_query($conn, $sql) or die ('Error querying.');
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("Location: ../signup.php?signup=usertaken");
                    exit();
                }else {
                    //Hashing the password

                    $hashedPwd = hash('sha512',$pwd);
                    //INSERT THE USER IN TO THE DATABASE
                    $sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
                    mysqli_query($conn, $sql) or die ('Error last query');
                    header("Location: ../index.php?message=signup-success");
                    exit();
                }
            }
        }
    }

} else{
    header("Location: ../signup.php?message");
    exit();
}