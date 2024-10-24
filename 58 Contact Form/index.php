<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Contact Form | Home</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <p>SEND E-MAIL</p>
        <form class="form" action="contactForm.php" method="post">
            <input type="text" name="browserName" placeholder="Full Name" required>
            <input type="text" name="mail" placeholder="Your e-mail" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit" name="commentSubmit">SEND MAIL</button>
        </form>
    </main>
</body>
</html>