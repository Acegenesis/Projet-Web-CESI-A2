<?php
    include 'bdd.php';
    include 'stages.php';
    $l = new Stage($conn);
    $num = $_POST['num'];
    $id = $_COOKIE['id'];
    $l->delPost($id, $num);
?>