<?php
    include_once "36.dbh.inc..php";

    $first= $_POST['first']; 
    $last= $_POST['last'];
    $email= $_POST['email'];
    $uid= $_POST['uid'];
    $pwd= $_POST['pwd'];

#used to insert or save data into a database
    $v_sql2="INSERT INTO userz (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
    mysqli_query($connection, $v_sql2);

    header("location: ../38.indexForSignUp..php?signup=success");
    