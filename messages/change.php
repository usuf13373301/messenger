<?php

$name = $_POST['name'];

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "messages";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

$query = $mysql->query("UPDATE users SET `name` = '$name' WHERE `name` = '$_COOKIE[username]'");

// setcookie("username", $name, time() + 24*3600, "/");

$mysql->close();
header("Location: author.html");