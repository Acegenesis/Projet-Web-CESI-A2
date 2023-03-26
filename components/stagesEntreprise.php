<?php $a = 0; ?>
<div class="list">
    <?php 
        include('../fonctions/stages.php');
        $stages = new Stage($conn);        
        $stages_list = $stages->getbycompany($page);
        foreach($stages_list as $stage) {
            $title = $stage['title_internship'];
            $description = $stage['description_internship'];
            $entreprise = $stage['name_company'];
            $id = $stage['id_internship'];
            $image = "../assets/img/code.png";
            if($id){
                $skill = $stages->getSkills($id);
            } else {
                $skill = [];
            }
            include('../components/itemList.php');
        }
    ?>
</div>