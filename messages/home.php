<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "messages";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

$query = $mysql->query("SELECT * FROM messages");

$messages = $query->fetch_all();

$mysql->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>messages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <a href="account.php"><h3><?=$_COOKIE['username']?></h3></a>
        <a href="logout.php">Log out</a>
    </div>
    <div class="container">
        <?php foreach ($messages as $message):?>
            <div class="text">
                <h4 class="user"><?=$message[1]?></h4>
                <p class="message"><?=$message[2]?></p>
            </div>
        <?php endforeach;?>
        <form action="message.php" method="post">
            <input type="text" name="message" id="">
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>