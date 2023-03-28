<?php
    include('../components/basic/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/basic/sign.php');
    else :
        include('../components/basic/navBar.php');
        $user = $_COOKIE['user'];
        $a = 0;
        include('../components/basic/search.php');
        include('../components/stages/stageList.php');
        include('../components/basic/footer.php');
    endif;
?>
