<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MythGyaan</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i|Rubik:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <img src="img/icons.png" alt="Icons">
        </div>
        <div class="title">
            <p id="title">MYTH<span class="bold">GYAAN</span></p>
            <p id="subtitle">Answer to all your questions related to <span class="bold">MYTHOLOGY<span></p>
            <p id="coming">Coming Soon</p>
        </div>
        <div class="comm">
            <p>Send in your questions</p>
            <div class="form">
                <form action="mail.php" method="post">
                    <input type="text" id="name" name="name" placeholder="NAME" required>
                    <input type="email" id="email" name="email" placeholder="EMAIL" required>
                    <textarea name="message" id="message" required placeholder="MESSAGE"></textarea>
                    <input type="submit" value="Send" id="submit"><input type="reset" value="Clear" id="submit">
<!--                    <button id="submit">SEND</button>-->
                </form>
            </div>
        </div>
    </div>
</body>
</html>