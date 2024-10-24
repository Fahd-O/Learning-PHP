<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
</head>
<body>
    
    <h1>
        <?php

            //one function should do one thing so that it is possible be used multiple times in different places

            function doSomething($d)
            {
                echo "75% of ".$d." is: ".$d * 0.75;
            }

            $integer = 50;

            doSomething($integer);

        ?>
    </h1>

</body>
</html>