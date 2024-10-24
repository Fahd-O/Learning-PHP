<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling</title>
    <link rel="stylesheet" href="style..css">
</head>
<body>
    <h2>Signup</h2>
    <form action="Includes./signUp.inc..php" method="POST">

        <input type="text" name="first" placeholder="Firstname"><br><br>
        <input type="text" name="last" placeholder="Lastname"><br><br>
        <input type="text" name="email" placeholder="E-mail"><br><br>
        <input type="text" name="uid" placeholder="Username"><br><br>
        <input type="password" name="pwd" placeholder="Password"><br><br>

        <button type="submit" name="submit">Sign up</button><br><br>

    </form>
    
    <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullUrl, "signup=empty") == true) 
        {
            echo "<p class='error'>Fill in all fields !</p>";
            exit();
        }
        else if (strpos($fullUrl, "signup=char") == true) 
        {
            echo "<p class='error'>You used invalid characters !</p>";
            exit();
        }
        else if (strpos($fullUrl, "signup=email") == true) 
        {
            echo "<p class='error'>E-mail is invalid !</p>";
            exit();
        }
        else if (strpos($fullUrl, "signup=success") == true) 
        {
            echo "<p class='success'>You have successfully signed up !</p>";
            exit();
        }
    ?>

</body>
</html>