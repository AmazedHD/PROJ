<?php

function make_connection()  {
    $mysqli = new mysqli('localhost','root','','myband');
    if ($mysqli->connect_errno) {
        die('Connection error ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_mailadresses() {
    $mysqli = make_connection();
    $query = "SELECT username FROM users";
    $stmt = $mysqli->prepare($query) or die ('Error Preparing 1.');
    $stmt->bind_result($mailadres) or die ('Error binding 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $results[] = $mailadres;
    }
    return $results;




}

