<?php
    include 'bdd.php';
    include 'stages.php';
    $id_users = $_COOKIE['id_users'];
    $id_internship = $_POST['id_internship'];
    $post = new stage($conn);
    $post->addPost($id_users, $id_internship);
?>