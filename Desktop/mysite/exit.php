<?php
unset($_COOKIE['user_id']);
unset($_COOKIE['username']);
setcookie('user_id', '', -5, '/');
setcookie('username', '', -5, '/');
$home_url = 'http://' . $_SERVER['PHP_SELF'];
 header('Location: ' . $home_url);
?>