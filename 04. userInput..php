<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="GET">
        <p>
            Field:<input type="text" name="person" />
            <button>Submit !</button>

        </p>
    </form>

    <?php

    $uname= $_GET['person'];
    echo "Assalamu 'alaykum ya ".$uname;

    ?>
    
</body>
</html>