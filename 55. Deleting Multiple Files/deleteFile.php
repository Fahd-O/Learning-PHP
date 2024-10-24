<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>55. Delete Folder Files | Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        $fileNames = $_POST['fileName'];
        $removeSpaces = str_replace(" ", "", $fileNames);
        $allFileNames = explode(",", $removeSpaces);
        $countAllNames = count($allFileNames);

        for ($i=0; $i < $countAllNames; $i++) 
        { 
            if (file_exists("Img./".$allFileNames[$i]) == false)
            {
                echo "<p class='error'>ERROR: Could not delete file(s)<br><br> Check the name you entered or file(s) may not exist</p>";
                echo "<h3 class='btn'><a href='index.php' class='btnLinkE'>Ok</a></h3>";
                exit();
            }
        }

        for ($i=0; $i < $countAllNames; $i++) 
        { 
            $path ="Img./".$allFileNames[$i];

            if(!unlink($path))
            {
                echo "<p class='error'>ERROR: Could not delete file(s)<br><br> You may not have required permission(s) to delete this file(s)</p>";
                echo "<h3 class='btn'><a href='index.php' class='btnLinkE'>Ok</a></h3>";
                exit();
            }
        }
        
        echo "<p class='success'>File(s) deleted successfully !</p>";
        echo "<h3 class='btn'><a href='index.php' class='btnLinkS'>Ok</a></h3>";
        #The header function may also be used to automatically redirect users back to the home page just that there will be no error message for the user to see
        #header("Location: index.php?deletesuccess");

        
    ?>
</body>
</html>

