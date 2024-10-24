<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals | POST & GET</title>
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

            echo $_POST['carrots']."<br>";
            echo $_GET['mango']."<br>";#this selects the 'value' of 'mango' from the url. it is then printed out on the screen by the 'echo' statement


        ?>
    </h1>

<!-- method="GET" displays information submitted from the form in the url once the submit btn is pressed -->
    <form method="GET">
            <input type="hidden" name="mango" value="fruit">
            <!-- when the button is pressed, "mango" is equated to "fruit" probably as a variable and this is displayed in the url -->
            <button type="submit">Tap me! </button>
    </form><br>

    <!-- method="POST" DOES NOT display information submitted from the form in the url once the submit btn is pressed -->
    <form method="POST">
            <input type="hidden" name="carrots" value="vegetable">
            <!-- when the button is pressed, "carrots" is equated to "vegetable" probably as a variable and this is NOT displayed in the url -->
            <button type="submit">Tap me! </button>
    </form>

</body>
</html>