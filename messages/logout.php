<?php
setcookie("username", $user['name'], time() - 24*3600, "/");
header("Location: /messages/index.html");
?>