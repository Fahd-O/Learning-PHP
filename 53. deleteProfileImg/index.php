<?php

    session_start();
    include_once 'dbh.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>53. Uploads</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $sqlCode = "SELECT * FROM 53_user_img";
        $result = mysqli_query($connectorToDataBase, $sqlCode);
        if (mysqli_num_rows($result) > 0) 
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $sqlCodeForImg = "SELECT * FROM 53_profile_img_status WHERE userid = '$id'";
                $imgResult = mysqli_query($connectorToDataBase, $sqlCodeForImg);

                while ($rowImg = mysqli_fetch_assoc($imgResult)) 
                {
                    echo "<div class='user-container'>";
                        if($rowImg['status'] == 0)
                        {
                            $fileName = "Uploads./profile".$id."*";
                            $fileInfo = glob($fileName);
                            $fileExt = explode(".", $fileInfo[0]) ;
                            $fileActualExt = $fileExt[1];
                            
                            echo "<img src='Uploads./profile".$id.".".$fileActualExt."?".mt_rand()."' alt='Profile ID. source= Learning PHP/53. deleteProfileImg./index.php file'>"; #this doesn't work for some reason
                            
                        }
                        else
                        {
                            echo "<img src='Uploads./DefaultProfileSilhouette.jpg' alt='Default Profile Silhouette.'>";
                        }
                        echo "<p>".$row ['userName']."</p>";
                    echo "</div>";
                }

            }
        }
        else
        {
            echo "There are no users inside the Database";
        }

        if (isset($_SESSION['id']))
        {
            if ($_SESSION['id'] == 1)
            {
                echo "You are logged in as user #1, i.e the Admin";
            }
            echo '<form action="upload.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>
    
            </form>';
            echo '<form action="deleteProImg.php" method="POST">

            <button type="submit" name="submit">Delete Profile Image</button>
            </form>';
        }
        else
        {
            echo "You are not logged in";
            echo "<form action='signUp.php' method='POST'>
                    <input type='text' name='firstName' placeholder='Firstname'>

                    <input type='text' name='lastName' placeholder='Lastname'>

                    <input type='text' name='userName' placeholder='Username'>

                    <input type='password' name='password' placeholder='Password'>

                    <button type='submit' name='signupSubmit'>Sign up</button>
                 </form>";
        }
    ?>
    
    <p>Login as User !</p>
    <form action="login.php" method="POST">
        <button type="submit" name="submitLogin">Login</button>
    </form>
    
    <p>Logout as User !</p>
    <form action="logout.php" method="POST">
        <button type="submit" name="submitLogout">Logout</button>
    </form>

</body>
</html>