<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>55. Delete Folder Files | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="header">
        File(s) Deleting Website
    </h1>

    Checkout the files available in the website directory below. After viewing, take note of the name of the file(s) you want to delete, then enter the name in the field below. Next, hit the delete button to delete it.<br><br>
    View files to delete here: <a href="Img./">Files</a><br><br>


<form action="deleteFile.php" method="POST">
    <input type="text" name="fileName" placeholder="Seperate each name with a comma (,)" style="width: 300px;" required>
    <button type="submit" name="submit" >Delete File</button>
</form>

</body>
</html>