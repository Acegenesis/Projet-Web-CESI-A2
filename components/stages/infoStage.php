<?php $a = 0; ?>
<div class="list">
    <?php
        $page = $_GET['id'];
        include('../class/stages.php');
        $stages = new Stage($conn);
        $stage = $stages->getOne($page)[0];
        $title = $stage['title_internship'];
        $description = $stage['description_internship'];
        $id = $stage['id_internship'];
        $image = $stage['image_internship'];
        $free_place = $stage['places'];
        $duration = $stage['duration'];
        $money = $stage['remuneration'];
        $creation = $stage['post'];
        $start = $stage['start'];
        $company = $stage['name_company'];
        if($id){
            $skill = $stages->getSkills($id);
        } else {
            $skill = [];
        }
        include('../components/stages/itemSoloStage.php');
    ?>
</div>