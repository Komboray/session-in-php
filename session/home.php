<?php
//this is the start of the session

session_start();

$user =  $_SESSION["username"];
$pass =  $_SESSION["password"];

echo $user;
echo $pass;


?>