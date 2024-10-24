<?php
    session_start();#php function, probably super global
    #seems to be used to link btw pages it exists in. used to save specific data like user id to make sure only signed-in users can view some pages or just to keep track of a particular user switching between a website's pages
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions | Contact</title>
</head>
<body>
    <h1 style="text-align: center">Contact</h1>

<ul>
    <li><a href="28. session_index..php">Home</a></li>
    <li><a href="28. session_contact..php">Contact</a></li>
</ul>
    
        <?php

        
            echo "<p style='text-align: center; font-size: x-large;'>".$_SESSION['username']."<br>";

            function showMsg()
            {
                if(!isset($_SESSION['username']))
                {
                    echo"You are not logged in !";
                }
                elseif(isset($_SESSION['username']))
                {
                    echo"You are logged in !";
                }
                else
                {
                    echo"error: something unexpected happened !";    
                }
            }

            showMsg();

        ?>

</body>
</html>