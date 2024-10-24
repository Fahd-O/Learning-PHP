<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>43. Hashing & Dehashing Passwords</title>
</head>
<body> 
    
    <?php

        $usPwd = "password";
        echo "<p style='color:red;'>This here is a raw user password, unhashed:</p>".$usPwd."<br><br>";
        
        $hsPwd = password_hash($usPwd, PASSWORD_DEFAULT);
        echo "<p style='color:red;'>This here is the user password, hashed:</p>".$hsPwd."<br><br>";

        $pwdVer = password_verify($usPwd, $hsPwd);
        echo "<p style='color:red;'>This here is the output of a hashed password verification, It's either 1 (which stands for true, i.e passwords match) or it may be 0 (which stands for false, i.e passwords do not match):</p>".$pwdVer."<br><br>";
        

    ?>

</body>
</html>