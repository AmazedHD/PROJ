
<?php
define ('HOST', 'localhost');
define ('USER', '24800_users');
define ('PASS','users');
define ('DBNAME', 'accounts');


//define ('HOST', 'localhost');
//define ('USER', 'accounts');
//define ('PASS','users');
//define ('DBNAME', '24800_users');


$mysqli = new mysqli(HOST,USER,PASS,DBNAME);

if ($mysqli->errno) {
    echo 'Connection error: ' . $mysqli->errno;
}
