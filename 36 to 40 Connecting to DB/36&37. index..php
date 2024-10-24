<?php
    include_once "Includes./36.dbh.inc..php";#spacing between file name or even using %20 is messing with the codes. which is why there is a difference in the nomenclature here and elsewhere.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to Database</title>
</head>
<body>

    <?php 
        #used to select or fetch data from database
        $v_sql="SELECT * FROM userz;";
        $v_result= mysqli_query($connection, $v_sql);
        $v_resultCheck= mysqli_num_rows($v_result);

        #used to display data fetched from database onto the screen
        if ($v_resultCheck > 0)
        {
            while ($row = mysqli_fetch_assoc($v_result)) 
            {
                echo $row['user_uid']."<br>";
            }
        }
        else 
        {
            echo "ERROR: something unexpected happened, kindly review codes";
        }
        
    ?>

</body>
</html>