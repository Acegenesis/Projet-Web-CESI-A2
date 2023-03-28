<?php
    include 'bdd.php';
    include '../class/stages.php';
    $l = new Stage($conn);
    $num = $_POST['num'];
    $id = $_COOKIE['id'];
    $l->delPost($id, $num);
?>