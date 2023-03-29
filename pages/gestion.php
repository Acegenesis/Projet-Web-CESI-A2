<?php
    if (isset($_COOKIE['status']) && $_COOKIE['status'] === 'eleve') {
        header('Location: user.php');
    }
    include('../components/basic/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/basic/sign.php');
    else :
        if($_COOKIE['status'] === 'admin' || $_COOKIE['status'] === 'Tuteur') {
            include('../components/basic/navbar.php');
            ?>

            <div class="gestionBtn">
                <?php if($_COOKIE['status'] == 'Tuteur') : ?>
                    
                    <a href="?type=recherche">recherche etudiants et pilotes</a>
                    <a href="?type=students">Gestion des étudiants</a>
                    <a href="?type=entreprises">Gestion des entreprises</a>
                    <a href="?type=stages">Gestion des stages</a> 

                <?php else: ?>
                    <a href="?type=recherche">recherche etudiants et pilotes</a>

                    <a href="?type=tuteurs">Gestion des tuteurs</a>
                    <a href="?type=students">Gestion des étudiants</a>
                    <a href="?type=entreprises">Gestion des entreprises</a>
                    <a href="?type=stages">Gestion des stages</a> 
                <?php endif; ?>
            </div>

            <?php
        

            if(isset($_GET['type']) && $_GET['type'] == 'tuteurs') :
                   {
                    if ($_COOKIE['status'] !== 'admin') {
                        header('Location: gestion.php');
                    }
                    $a = 3;   
                    $terme = "";         
                    include ('../components/GestionTuteur.php');             
                    
                }
            elseif(isset($_GET['type']) && $_GET['type'] == 'students') :
                $a = 4;
                include ('../components/GestionEtudiant.php');
            elseif(isset($_GET['type']) && $_GET['type'] == 'entreprises') :
                $a = 1;
                include ('../components/GestionEntreprise.php');
            elseif(isset($_GET['type']) && $_GET['type'] == 'stages') :
                $a = 6;
                include ('../components/GestionStage.php');
            elseif(isset($_GET['type']) && $_GET['type'] == 'recherche') :
                    $a = 6;
                    include ('../components/basic/search.php');
                    
            elseif (isset($_GET["s"]) AND $_GET["s"] == "chercher"):
            {       $a = 3;
                    $_GET["search"] = htmlspecialchars($_GET["search"]);
                    $terme = $_GET["search"];
                   include ('../components/basic/search.php');
                   
                   include ('../components/GestionTuteur.php');             


            }
            endif;
            include('../components/basic/footer.php');
        } else {
            header('Location: ../pages/index.php');
        }
    endif;

?>
