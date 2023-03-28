<?php
    include('../components/basic/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/basic/sign.php');
    else :
        include('../components/basic/navbar.php');
        $a = 0;
        include('../components/basic/search.php'); ?>
        <div class="list">
            <?php
                include('../class/stages.php');
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
                    include('../components/general/itemList.php');
                }
            ?>
        </div>
    <?php 
        include('../components/basic/footer.php');
    endif;
 ?>