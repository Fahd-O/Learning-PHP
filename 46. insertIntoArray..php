<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>46. Array Insert</title>
</head>
<body>
    
    <?php 

        $data = array("'Alimah");

        $data[] = "Jamiu";
        $data[] = "Farouq";
        print_r($data);
        echo "<br><br>";

        array_push($data, "Fawas", "Abdu-l-Basit", "Abdu-l-Qoyyuum", 31425346578697080);
        print_r($data);

    ?>

</body>
</html>