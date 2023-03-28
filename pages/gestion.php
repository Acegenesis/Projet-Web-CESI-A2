<?php
    include('../components/basic/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/basic/sign.php');
    else :
        include('../components/basic/navbar.php');
        ?>

        <div class="gestionBtn">
            <a href="?type=tuteurs">Gestion des tuteurs</a>
            <a href="?type=students">Gestion des étudiants</a>
            <a href="?type=entreprises">Gestion des entreprises</a>
            <a href="?type=stages">Gestion des stages</a> 
        </div>

        <?php
        if(isset($_GET['type']) && $_GET['type'] == 'tuteurs') :
            $a = 3;
            include ('../components/basic/search.php');
            include ('../components/GestionTuteur.php');
        elseif(isset($_GET['type']) && $_GET['type'] == 'students') :
            include ('../components/basic/search.php');
            include ('../components/GestionEtudiant.php');
        elseif(isset($_GET['type']) && $_GET['type'] == 'entreprises') :
            include ('../components/basic/search.php');
            include ('../components/GestionEntreprise.php');
        elseif(isset($_GET['type']) && $_GET['type'] == 'stages') :
            include ('../components/basic/search.php');
            include ('../components/GestionStage.php');
        endif;
        include('../components/basic/footer.php');
    endif;
?>
