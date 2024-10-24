<?php
    include_once "36.dbh.inc..php";

    #protecting database... preventing user from injecting SQL code from registration form.
    $first= mysqli_real_escape_string($connection, $_POST['first']); 
    $last= mysqli_real_escape_string($connection, $_POST['last']);
    $email= mysqli_real_escape_string($connection, $_POST['email']);
    $uid= mysqli_real_escape_string($connection, $_POST['uid']);
    $pwd= mysqli_real_escape_string($connection, $_POST['pwd']);

#used to insert or save data into a database
    $v_sql2="INSERT INTO userz (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
    mysqli_query($connection, $v_sql2);

    header("location: ../38.indexForSignUp..php?signup=success");
    