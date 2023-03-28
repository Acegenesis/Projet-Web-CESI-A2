<?php
    include('../components/basic/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/basic/sign.php');
    else :
        if (!isset($_GET['id'])) :
            include('../components/basic/navbar.php');
            $a = 1;
            include('../components/basic/search.php');
            include('../components/entreprises/entrepriseList.php');
            include('../components/basic/footer.php');
        else :
            include('../components/basic/navbar.php');
            include('../components/entreprises/infoEntreprise.php');
            include('../components/entreprises/stagesEntreprise.php');
            include('../components/general/posts.php');
            include('../components/basic/footer.php');
        endif;
    endif;
?>
