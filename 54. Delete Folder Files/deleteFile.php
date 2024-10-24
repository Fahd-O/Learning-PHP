<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>54. Delete Folder Files | Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
$path ="Img./img.png";

if(!unlink($path))
{
    echo "<p class='error'>ERROR: Could not delete file, file may not exist</p>";
    echo "<h3 class='btn'><a href='index.php' class='btnLinkE'>Ok</a></h3>";
}
else
{
    echo "<p class='success'>File deleted successfully !</p>";
    echo "<h3 class='btn'><a href='index.php' class='btnLinkS'>Ok</a></h3>";
    #The header function may also be used to automatically redirect users back to the home page just that there will be no error message for the user to see
    #header("Location: index.php?deletesuccess");
}
?>
</body>
</html>

