<?php 

$server = "localhost";
$username = "root";
$pwd = "root";
$db = "LearningPHP.";

$conn = mysqli_connect($server, $username, $pwd, $db);
if(!$conn)
{
    die("Connection to Database failed:".mysqli_connect_errno());
}