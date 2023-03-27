<?php
    include 'bdd.php';
    include 'postuler.php';
    $users = $_POST['users'];
    $internship = $_COOKIE['internship'];
    $post = new Postuler($conn);
    $post->addPost($users, $internship);
    header('Location: /pages/stages.php?id='.$id);
?>