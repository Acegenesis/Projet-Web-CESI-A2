<?php
    include('../components/basic/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/basic/sign.php');
    else :
        $b = 1;
        if (!isset($_GET['id'])) :
                include('../components/basic/navbar.php');
                $a = 0;
                include('../components/basic/search.php');
                include('../components/stages/stageList.php');
                include('../components/basic/footer.php');
        else :
            $b = 2;
            include('../components/basic/navbar.php');
            include('../components/stages/infoStage.php');
            include('../components/basic/footer.php');
        endif;
    endif;
?>
