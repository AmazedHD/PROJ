<?php

if (isset($_POST['submit'])) {
echo "dab";
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php?message=uitgelogd");
    exit();
}