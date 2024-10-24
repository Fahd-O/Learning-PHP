<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop | For-Each Loop</title>
</head>
<body>
    
    <h1>
        <?php

            $ray = array("Beans", "Eguisi", "Egg", "Dodo", "Onions", "Ginger");

            foreach($ray as $loopVar)
            {
                echo "Stuffs in the kitchen are ".$loopVar."<br>";
            }

        ?>
    </h1>

</body>
</html>