<?php
    include('../components/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/sign.php');
    else :
        $b = 0;
        if (!isset($_GET['id'])) :
            $b = 1;

        include('../components/header.php');
        include('../components/navbar.php');

        include('../components/op_stage.php');

        include('../components/stageList.php');
        include('../components/footer.php');
        else :
            $b = 2;
        include('../components/header.php');
        include('../components/navbar.php');

        include('../components/op_stage.php');

        include('../components/infoStage.php');
        include('../fonction/postPostuler.php');    
        include('../components/footer.php');
        endif;
    endif;
?>
