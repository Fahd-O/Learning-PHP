<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./13. scheduledMessage..css">
    <title>Scheduled Message</title>
</head>
<body>
    
    <h1>    
        <?php

            $dayOfWeek = date("w");
            //echo $dayOfWeek;

            switch($dayOfWeek)
            {
                case 1:
                    echo "Today's day of the week is Monday";
                break;

                case 2:
                    echo "Today's day of the week is Tuesday";
                break;

                case 3:
                    echo "Today's day of the week is Wednesday";
                break;

                case 4:
                    echo "Today's day of the week is Thursday";
                break;

                case 5:
                    echo "Today's day of the week is Friday";
                break;

                case 6:
                    echo "<p>Today's day of the week is Saturday</p>";
                break;

                case 7:
                    echo "Today's day of the week is Sunday";
                break;
            }

        ?>
    </h1>

</body>
</html>