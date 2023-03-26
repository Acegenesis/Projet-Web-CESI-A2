<?php 
    if (!isset($_GET['id'])) :
    include('../components/header.php');
    $a = 0; 
    include('../components/navbar.php');
    include('../components/stageList.php');
    include('../components/footer.php');
    else :
    include('../components/header.php');
    $a = 0;
    include('../components/navbar.php');
    include('../components/stage.php');

    include('../components/footer.php');
    endif;
?>
