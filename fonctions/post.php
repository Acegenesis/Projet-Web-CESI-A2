<?php
    include 'bdd.php';
    include ('../class/entreprise.php');
    $content = $_POST['post'];
    $author = $_COOKIE['id'];
    $id = $_POST['id'];
    $note = $_POST['note'];
    $post = new Entreprise($conn);
    $post->addPost($author, $id, $content, $note);
    header('Location: /pages/entreprises.php?id='.$id);
?>