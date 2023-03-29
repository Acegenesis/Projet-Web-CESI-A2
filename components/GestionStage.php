<?php $a = 2; 
?>
<a href="../pages/stage_add.php" class="name"><h3>ajouter nouveau stage</h3></a>

<div class="list">
    <?php  
        include ('../class/gestions.php');
        
            $gestion = new Gestion($conn);        
            $list = $gestion->getStage();
                
        foreach($list as $stage) {
            $id = $stage['id_internship'];
            $title = $stage['title_internship'];
            $company= $stage['name_company'];
            $description = $stage['description_internship'];
            $place = $stage['places'];
            $duration = $stage['duration'];
            $remuneration = $stage['remuneration'];
            $start = $stage['start'];
            include('../components/general/itemListStage.php');

        }
    ?>
</div>

