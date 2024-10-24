<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBALS | Superglobals</title>
</head>
<body>
    
    <h1>
        <?php
            /*
             $GLOBALS
             $_POST
             $_GET
             $_COOKIES
             $_SESSION
            */

            $e = 99;

            function doer()
            {
                echo "The value of the global variable e is ".$GLOBALS['e'];
            }

            doer();


        ?>
    </h1>

</body>
</html>