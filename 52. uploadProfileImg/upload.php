<?php

session_start();
include_once 'dbh.php';
$id = $_SESSION['id'];

if(isset($_POST['submit']))
{
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array(
                        'jpg',
                        'jpeg',
                        'png',
                        'pdf'
                    );
}

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 1048576)#the file size is in bytes
            {
                $fileNameNew = "profile".$id.".".$fileActualExt;

                $fileDestination = 'Uploads./'.$fileNameNew;

                move_uploaded_file($fileTmpName,$fileDestination);

                $sqlCodeToUpdate = "UPDATE 52_profile_img_status SET status=0 WHERE userid='$id'";
                $result = mysqli_query($connectorToDataBase, $sqlCodeToUpdate);
                header("Location: index.php?upload=success");
            }
            else
            {
                echo "File size is too big ! Max acceptable file size is 1.0mb";
            }
        }
        else
        {
            echo "ERROR: There was an error while uploading your file";
        }
    }
    else
    {
        echo "ERROR: file type not allowed ! You can only upload 'jpg', 'png' and 'pdf' files";
    }

?>