<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies & Sessions</title>
</head>
<body>
    
    <h1>
        <?php
        # 'Cookies' save info about the web user on their web browser app WHILE the 'Sessions' save info about web user on the server side.

        #this is how a cookie is created, expires in a day which = 86400 seconds. "time()" is a function in php which returns the current system time. if you wanna destroy cookies instantly, use any -ve value like -86400, -1... which means it should have been cleared yesterday, so on realising this, the cookie gets destroyed immediately after the user closes the page
        setcookie("name", "Fahd", time() + 86400);

        
        #this is how sessions are created
        $_SESSION['name']= "pomergranates";



        ?>
    </h1>

</body>
</html>