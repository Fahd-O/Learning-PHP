<?php
    include_once "Includes./36.dbh.inc..php";#spacing between file name or even using %20 is messing with the codes. which is why there is a difference in the nomenclature here and elsewhere.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared Statements</title>
</head>
<body>

    <?php 
        $data = "Admin";
        //created a template 
        $v_sql="SELECT * FROM userz WHERE user_uid=?;";
        //create a prepared statement
        $stmt = mysqli_stmt_init($connection);
        //prepare the prepared statement
        if (!mysqli_stmt_prepare($stmt, $v_sql)) 
        {
            echo "ERROR: SQL statement failed";
        }
        else 
        {
            //bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $data);
            //run parameters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) 
            {
                echo $row['user_uid']."<br>";
            }
        }

        
      
    ?>

</body>
</html>