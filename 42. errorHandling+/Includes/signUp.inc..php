<?php
    #checking if user has clicked signup button
    if (isset($_POST['submit'])) 
    {
        #then database connection is included here, although there is no database, this is just for Demo.
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
                    header("Location: ../index.php?signup=email&first=$first&last=$last&email=$email&uid=$uid");
                    exit(); 
                    #unresolved error. if attempt is made to correct the  invalid email address here, the form then displays the error to fill in all fields. its like the strings (which is now equal to nothing) added to the URL is overwriting whatever the user enters in the form hence the error to 'fill in all fields'. So this is a fail, so user would literarily have to just start over from the index page as they won't be able to continue from here
                }
                #not checking anything here, just successful signup
                else 
                {
                    header("Location: ../index.php?signup=success");
                    exit();
                }
            }
        }
    }
    #redirecting whoever gets here without clicking the signup button back to the index/homepage
    else 
    {
        header("Location: ../index.php?");
        exit();     
    }

?>