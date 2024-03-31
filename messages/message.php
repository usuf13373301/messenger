<?php
$message = $_POST['message'];

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "messages";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

$query = $mysql->query("INSERT INTO messages (`name`, `message`) VALUES ('$_COOKIE[username]', '$message')");

$mysql->close();
header("Location: home.php");
?>