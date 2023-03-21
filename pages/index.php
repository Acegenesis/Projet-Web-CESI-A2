<?php include('../components/header.php'); ?>
<?php $a = 0; ?>
<?php include('../components/search.php'); ?>

<div class="list">
    <?php 
        include('../fonctions/stages.php');

        $stages = new Stage($conn);
        $nb_stages = 0;
        
        foreach($stages->getAll() as $stage) {
            $nb_stages ++;
            $title = $stage['title_internship'];
            $description = $stage['description_internship'];
            $entreprise = $stage['name_company'];
            $id = $stage['id_internship'];
            if($id){
                $skill = $stages->getSkills($id);
            } else {
                $skill = [];
            }
            include('../components/itemList.php');
        }
        $articles_par_page = 3;
        $nombre_pages = ceil($nb_stages / $articles_par_page);
        echo $nombre_pages;
    ?>
    <div class="more-results">
  <span>Plus de résultats</span>
  <i class="fas fa-angle-down"></i>
</div>
</div>


<?php include('../components/footer.php') ?>
