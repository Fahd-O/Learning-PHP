<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>59. Regular Expressions</title>
</head>
<body>
    <?php

        $string = "ana fahd ibn saadiq ibn fulaan";

        if (preg_match("/ibn/", $string)) 
        {
            echo "Match found !<br><br>";
        }
        
        if (preg_match("/ibn/", $string, $aRrAy)) 
        {
            print_r($aRrAy);
            echo "<br><br>";
        }
        else
        {
            echo "Not found !<br><br>";
        }
        
        if (preg_match_all("/s(aa)diq/", $string, $ArRaY)) 
        {
            print_r($ArRaY);
            echo "<br><br>";
        }
        else
        {
            echo "Not found !<br><br>";
        }

        echo preg_replace("/ana/", "I'm", $string)."<br><br>";
        echo preg_replace("/ibn/", "son of", $string)."<br><br>";

        echo $string;
        
    ?>
</body>
</html>