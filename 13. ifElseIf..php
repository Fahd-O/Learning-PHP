<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Elseif Loop</title>
</head>
<body>

    <form action="" method="GET">
       
        Enter a number <input type="text" name="number">
       <button>Submit</button> 

    </form>
    
<?php
        // if else statement
    $beans = $_GET["number"];

    if ($beans % 2 == 0)
    {
        echo $beans." is an even number <br><br>";
    }
    elseif ($beans % 2 == 1)
    {
        echo $beans." is an odd number <br><br>";
    }
    else //this else block doesn't execute, wonder why
    {
        echo "Please enter a valid number <br><br>";
    }
    
?>

</body>
</html>