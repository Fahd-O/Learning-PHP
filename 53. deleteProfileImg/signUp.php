<?php
include_once 'dbh.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$password = $_POST['password'];

$sqlCodeToInsertSignupDataIntoDatabase ="INSERT INTO 52_user_img (firstName, lastName, userName, password) VALUES('$firstName', '$lastName', '$userName', '$password')";
mysqli_query($connectorToDataBase, $sqlCodeToInsertSignupDataIntoDatabase);

$sqlCodeToGetDataFromDatabase ="SELECT * FROM 52_user_img WHERE userName = '$userName' AND firstName = '$firstName'";
$result = mysqli_query($connectorToDataBase, $sqlCodeToGetDataFromDatabase);

if(mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        $userid = $row['id'];
        $sqlCodeToInsertUserDataIntoDatabase ="INSERT INTO 52_profile_img_status (userid, status) VALUES ('$userid', 1)";
        mysqli_query($connectorToDataBase, $sqlCodeToInsertUserDataIntoDatabase);
        header("Location: index.php");
    }
}
else
{
    echo "<p style=' margin-top :5%; text-align:center; color:white; background:red; font-size:x-large; border-radius:2rem; padding:1%;'>ERROR: No results. Code Source: signUp.php</p>";
}

?>