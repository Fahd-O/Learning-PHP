<?php
session_start();
include_once 'dbh.php';
$sessionId = $_SESSION['id'];

$fileName = "Uploads./profile".$sessionId."*";
$fileInfo = glob($fileName);
$fileExt = explode(".", $fileInfo[0]) ;
$fileActualExt = $fileExt[1];

$file = "Uploads./profile".$sessionId.".".$fileActualExt;

if (!unlink($file)) 
{
    echo "Could not delete file !";
}
else
{
    echo "File deleted !";
}

$sqlCodeToUpdateStatusWhenUserDeletesProfileImage =  "UPDATE 53_profile_img_status SET status=1 WHERE userid='$sessionId';";

mysqli_query($connectorToDataBase, $sqlCodeToUpdateStatusWhenUserDeletesProfileImage);

header("Location: index.php?deletesuccess");