<?php
    include('../components/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/sign.php');
    else :
        include('../components/header.php');
        include('../components/navbar.php');
        $a = 0;
        include('../components/search.php'); ?>
        <div class="list">
            <?php
                include('../fonctions/stages.php');
                $stages = new Stage($conn);
                foreach($stages->getAllFav($_COOKIE['id']) as $stage) {
                    $title = $stage['title_internship'];
                    $description = $stage['description_internship'];
                    $entreprise = $stage['name_company'];
                    $id = $stage['id_internship'];
                    $image = "../assets/img/code.png";
                    if($id) {
                        $skill = $stages->getSkills($id);
                    }else {
                        $skill = [];
                    }
                    include('../components/itemList.php');
                }
            ?>
        </div>
    <?php 
        include('../components/footer.php');
    endif;
 ?>