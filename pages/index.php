<?php
    include('../components/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/sign.php');
    else :
        include('../components/navBar.php');
        $user = $_COOKIE['user'];
        $a = 0;
        include('../components/stageList.php');
        include('../components/footer.php');
    endif;
?>
