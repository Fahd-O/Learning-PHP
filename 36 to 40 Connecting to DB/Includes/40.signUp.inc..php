<?php
include_once "36.dbh.inc..php";

#protecting database... preventing user from injecting SQL code from registration form.
$first= mysqli_real_escape_string($connection, $_POST['first']); 
$last= mysqli_real_escape_string($connection, $_POST['last']);
$email= mysqli_real_escape_string($connection, $_POST['email']);
$uid= mysqli_real_escape_string($connection, $_POST['uid']);
$pwd= mysqli_real_escape_string($connection, $_POST['pwd']);

#used to insert or save data into a database
$sql="INSERT INTO userz (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($connection);
if (!mysqli_stmt_prepare($stmt, $sql)) 
{
    echo "ERROR: SQL Error from 40.signup.inc..php";
}
else 
{
    mysqli_stmt_bind_param($stmt,"sssss", $first, $last, $email, $uid, $pwd);
    mysqli_stmt_execute($stmt);
}

header("location: ../38.indexForSignUp..php?signup=success");
    