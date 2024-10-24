<?php
    session_start();#php function, probably super global
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions | Index</title>
</head>
<body>
<h1 style="text-align: center">Homepage</h1>
<ul>
    <li><a href="28. session_index..php">Home</a></li>
    <li><a href="28. session_contact..php">Contact</a></li>
</ul>
    
   
        <?php

        $_SESSION['username']= "Fahd";
        #take note of the "p" tag <p>, it wasn't closed delibrately. the inline styling in the open <p> tag affects every other thing that is being echoed as well because it was never closed !
        echo "<p style='text-align: center; font-size: x-large;'>".$_SESSION['username']."<br>";

            #a function I created just to print out a message under some conditions. note by the way that this function i created just here initially was not accessible on the contact page so I copied and pasted it there. turns out, the session start function in php seems to only store the "$_SESSION", in built php variable, value and this is then accessible on the different pages where the "session_start()" function is included in a particular website. 
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