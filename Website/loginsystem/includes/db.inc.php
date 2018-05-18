<?php

$dbServername = "localhost";
$dbUsername = "images";
$dbPassword = "images";
$dbName = "image_upload";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die ('Error connecting.');