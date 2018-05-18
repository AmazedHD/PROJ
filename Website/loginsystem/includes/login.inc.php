<?php

session_start();

if (isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Erros handelers
    //check if input are empty

    if (empty($uid) || empty($pwd)) {
        header("Location: ../index.php?login=empty");
        exit();


    } else {
    $sql = "SLECT * FROM users WHERE user_uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../index.php?login=error");
        exit();
    }else{
        if ($row = mysqli_fetch_assoc($result)) {
            //DEHASHING
            $hashedPwdCheck = $hashedPwd = hash('sha512',$pwd);

        }
    }


    }
} else {
    header("Location: ../index.php?login=error");
    exit();

}