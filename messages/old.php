<?php
$name = $_POST['name'];

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "messages";

$mysql = new mysqli($db_host, $db_user, $db_pass, $db_name);

$query = $mysql->query("SELECT * FROM users WHERE `name` = '$name'");

if ($query->num_rows > 0) {
    $user = $query->fetch_assoc();
    setcookie("username", $user['name'], time() + 24*3600, "/");
} else {
    echo "0 results";
}

$mysql->close();
header("Location: home.php");
?>