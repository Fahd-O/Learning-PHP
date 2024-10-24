<?php 
    include_once "dbh.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>47. DB to Array</title>
</head>
<body>
    
    <?php
        $sql = "SELECT * FROM data";
        $result = mysqli_query($conn, $sql);
        $datum = array();
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $datum[] = $row; 
                print_r($row); 
                echo "<br><br>";
            }
        }
        echo "<br><br>";
        print_r($datum);
        echo "<br>";

        foreach ($datum[0] as $fizz) 
        {
            echo "<br><br>".$fizz;
        } 
        
        foreach ($datum as $fizz) 
        {
            echo "<br><br>".$fizz['text'];
        }
    ?>

</body>
</html>