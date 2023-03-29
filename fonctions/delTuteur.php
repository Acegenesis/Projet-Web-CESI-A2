<?php
    include ('bdd.php');
    include ('../class/user.php');
    $users = new User($conn);
    $num = $_POST['num'];
    $users->deleteTuteur($num);
?>