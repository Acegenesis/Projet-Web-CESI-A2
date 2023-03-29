<?php
    include ('bdd.php');
    include ('../class/entreprise.php');
    $users = new Entreprise($conn);
    $num = $_POST['num'];
    $users->deleteEntreprise($num);
?>