<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="#">
                <img src="logo.png" alt="Logo" width="50px" height="50px">
            </a>
            
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="header-login">
                <?php
                    if(isset($_SESSION['userId']))
                    {
                       echo '<form action="includes/logout.inc.php" method="POST">
                       <button type="submit" name="logout-submit">Logout</button>
                       </form>';
                    }
                    else
                    {
                        echo '<form action="includes/login.inc.php"       method="POST">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                        </form>
    
                        <a href="signUp.php">Sign Up</a>';
                    }
                ?>

            </div>
        </nav>
    </header>