<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST METHOD"] == "POST") {

    if(empty(trim($_POST["username"]))){
        $username_err = "please enter a username"
    }
}

?>