<?php
    include ('bdd.php');
    include ('../class/user.php');
    $users = new User($conn);
    $users->updateTuteur($_POST['num'], $_POST['nom'], $_POST['campus'], $_POST['promo']);
?>