<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo')

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_USERNAME, DB_NAME);

if($link === false){
    die("ERROR: could not connect" . mysqli_connect_error())
}
?>