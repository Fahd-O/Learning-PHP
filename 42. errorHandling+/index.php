<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling+</title>
    <link rel="stylesheet" href="style..css">
</head>
<body>
    <h2>Signup</h2>
    <form action="Includes./signUp.inc..php" method="POST">

        <?php
            if(isset($_GET['first']))
            {
                $first = $_GET['first'];
                echo'<input type="text" name="$first" placeholder="Firstname" value="'.$first.'"><br><br>';
            } 
            else
            {
                echo '<input type="text" name="first" placeholder="Firstname"><br><br>';
            }
            
            if(isset($_GET['last']))
            {
                $last = $_GET['last'];
                echo'<input type="text" name="$last" placeholder="Lastname" value="'.$last.'"><br><br>';
            } 
            else
            {
                echo '<input type="text" name="last" placeholder="Lastname"><br><br>';
            }
            
            if(isset($_GET['email']))
            {
                $email = $_GET['email'];
                echo'<input type="text" name="$email" placeholder="E-mail" value="'.$email.'"><br><br>';
            } 
            else
            {
                echo '<input type="text" name="email" placeholder="E-mail"><br><br>';
            }
            
            if(isset($_GET['uid']))
            {
                $uid = $_GET['uid'];
                echo'<input type="text" name="$uid" placeholder="Username" value="'.$uid.'"><br><br>';
            } 
            else
            {
                echo '<input type="text" name="uid" placeholder="Username"><br><br>';
            }
        ?>

        <input type="password" name="pwd" placeholder="Password"><br><br>

        <button type="submit" name="submit">Sign up</button><br><br>

    </form>
    
    <?php #checking URL in order to display error or signup success message

        if(!isset($_GET['signup']))
        {
            exit();
        }
        else
        {
            $signupCheck = $_GET['signup'];

            if($signupCheck == 'empty')
            {
                echo "<p class='error'>Fill in all fields !</p>";
                exit();
            }
            elseif ($signupCheck == 'char') 
            {
                echo "<p class='error'>You used invalid characters !</p>";
                exit();
            }
            elseif ($signupCheck == 'email') 
            {
                echo "<p class='error'>E-mail is invalid !</p>";
                exit();
            }
            elseif ($signupCheck == 'success') 
            {
                echo "<p class='success'>You have successfully signed up !</p>";
                exit();
            }
            else {
                echo "<p class='unexpectedError'>ERROR: Uncaught error, something unexpected happened</p>";
            }
        }
    ?>

</body>
</html>