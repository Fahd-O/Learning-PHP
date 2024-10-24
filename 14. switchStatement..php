<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>

    <form action="" method="GET">
       
       <h2> 
           Enter a number between 1 and 10: <input type="password" name="number" placeholder="1...10"> 
           <button>Submit</button> 
        </h2>

    </form>
    <h1>
        <?php

            $electricity = $_GET["number"];

            switch($electricity)
            {
                case 0:
                    echo "The number entered will be stated right here...";
                break;

                case 1:
                    echo "The number entered is 1";
                break;

                case 2:
                    echo "The number entered is 2";
                break;

                case 3:
                    echo "The number entered is 3";
                break;

                case 4:
                    echo "The number entered is 4";
                break;

                case 5:
                    echo "The number entered is 5";
                break;

                case 5:
                    echo "The number entered is 5";
                break;

                case 6:
                    echo "The number entered is 6";
                break;

                case 7:
                    echo "The number entered is 7";
                break;

                case 8:
                    echo "The number entered is 8";
                break;

                case 9:
                    echo "The number entered is 9";
                break;

                case 10:
                    echo "The number entered is 10";
                break;

                default:
                    echo "Please enter a valid number within range <br><br>";
            }

        ?>
    </h1>

</body>
</html>