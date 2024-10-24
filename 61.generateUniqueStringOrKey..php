<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>61. Regular Expressions</title>
</head>
<body>
    <?php

        #user defined function is created here. it generates random strings or key of defined length
        function KeyGen()
        {
            $strLen = 7;
            $str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ()$";
            $key = substr(str_shuffle($str), 0, $strLen);
            return $key;
        }
        echo KeyGen()."<br><br>";

        function KeyGen2()
        {
            # "uniqid()" is a built in PHP function that generates random string based on current time stamp in milisecond
            $key = uniqid();
            return $key;
        }
        echo KeyGen2()."<br><br>";

        function KeyGen3()
        {   
            #this makes the "uniqid()" function more unique as the string entered in it precedes whatever random string is generated afterwards.
            $key = uniqid('Fahd');
            return $key;
        }
        echo KeyGen3()."<br><br>";

        function KeyGen4()
        {   
            #this makes the "uniqid()" function even more unique. more random characters are added right after a period from the previous one
            $key = uniqid('Fahd', true);
            return $key;
        }
        echo KeyGen4()."<br><br>";


        $dbConn = mysqli_connect("localhost", "root", "root", "LearningPHP.");

        function checkKeys($dbConn, $randStr)
        {
            $SQLcode = "SELECT * FROM Keystring_61";
            $iThinkResultFromDBIsSavedHereWhichIsWhyItIsCalledResultMostOfTheTime = mysqli_query($dbConn, $SQLcode);

            while ($row = mysqli_fetch_assoc($iThinkResultFromDBIsSavedHereWhichIsWhyItIsCalledResultMostOfTheTime))
            {
                if ($row['keystringKey'] == $randStr)
                {
                    $keyExists = true;
                    break;
                }
                else
                {
                    $keyExists = false;
                }
            }
            return $keyExists;
        }

        function KeyGen5($dbConn)
        {
            $strLen = 1;
            $str = "abcdefg";
            $key = substr(str_shuffle($str), 0, $strLen);

            $checkKey = checkKeys($dbConn, $key);

            while ($checkKey == true)
            {
                $key = substr(str_shuffle($str), 0, $strLen);
                $checkKey = checkKeys($dbConn, $key);
            }
            return $key;
        }
        echo KeyGen5($dbConn)."<br><br>";
    ?>
</body>
</html>