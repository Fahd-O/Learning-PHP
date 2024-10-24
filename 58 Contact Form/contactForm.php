<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form | Sent</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php

    if(isset($_POST['commentSubmit']))
    {
        $bName = $_POST['browserName'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "cumulus5120@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an e-mail from ".$bName.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);

        echo "<h2 class='success'>e-mail sent successfully !</h2>";
        echo "<h3 class='btn'><a href='index.php' class='btnLinkS'>Ok</a></h3>";
        
    }
    else
    {
        header("Location: index.php");
    }