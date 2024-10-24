<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "The Login System";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn)
{
    die("Connection to Database failed: ".mysqli_connect_error());
}