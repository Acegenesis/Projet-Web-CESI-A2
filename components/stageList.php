<?php $a = 0; ?>
<?php include('../components/search.php'); ?>
<div class="list">
    <?php 
        include('../fonctions/stages.php');
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 3;
        $offset = $limit * ($page - 1);
        $stages = new Stage($conn);        

        $total = count($stages->getAll());
        $pages = ceil($total / $limit);

        $stages_list = $stages->getAllWithLimit($limit, $offset);
        foreach($stages_list as $stage) {
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
    ?>
    
</div>
<div class="pagination">
    <?php if($page > 1) { ?>
        <a href="?page=<?php echo $page - 1 ?>"><</a>
    <?php } ?>

        <a href="?page=<?php echo $page ?>"><?php echo "$page"; ?></a>

    <?php if($page < $pages) { ?>
        <a href="?page=<?php echo $page + 1 ?>">></a>
    <?php } ?>
    
</div>