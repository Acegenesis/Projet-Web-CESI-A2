<?php
unset($_COOKIE['user']);
setcookie('user', null, -1, '/'); 
unset($_COOKIE['id']);
setcookie('id', null, -1, '/'); 
header('Location: /');
?>

