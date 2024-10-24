<?php
    #checking if user has clicked signup button
    if (isset($_POST['submit'])) 
    {
        #then database connection is included here
        include_once 'dbh.inc..php';

        #then data is fetched from signup form
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        #checking if inputs are empty
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) 
        {
            header("Location: ../index.php?signup=empty");
            exit();    
        }
        else 
        {
            #checking if input characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $first)|| !preg_match("/^[a-zA-Z]*$/", $last)) 
            {
                header("Location: ../index.php?signup=char");
                exit();    
            }
            else
            {
                #checking if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    header("Location: ../index.php?signup=email");
                    exit();    
                }
                else 
                {
                    header("Location: ../index.php?signup=success");
                    exit();
                }
            }
        }
    }
    else 
    {
        header("Location: ../index.php?");
        exit();     
    }

?>