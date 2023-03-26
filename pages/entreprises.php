<?php 
    if (!isset($_GET['id'])) :
    include('../components/header.php');
    include('../components/navbar.php');
    include('../components/entrepriseList.php');
    include('../components/footer.php');
    else :
    include('../components/header.php');
    include('../components/navbar.php');
    include('../components/infoEntreprise.php');
    include('../components/stagesEntreprise.php');
    include('../components/footer.php');
    endif;
?>
