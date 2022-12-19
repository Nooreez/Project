<?php
 session_start();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <img src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" width="100" alt="">
        <h2 style="margin: 10px 0"><?=  $_SESSION['user']['email'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="/logout.php" class="logout">Exit</a>

    </div>
</body>
</html>