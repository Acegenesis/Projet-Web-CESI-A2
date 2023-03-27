<?php $a = 0; ?>
<?php include('../components/search_back.php'); ?>
<div class="list">
    <?php 
        include('../fonctions/stages.php');
        if ($terme == ""){

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 4;
        $offset = $limit * ($page - 1);
        $stages = new Stage($conn);        
        $total = $stages->getNumber()[0]['COUNT(*)'];
        $pages = ceil($total / $limit);
        $stages_list = $stages->getAllOffset($limit, $offset);
        }
        else
        {
        
        $stages = new search($conn);
        $stages_list = $stages->get_stages($terme);
}
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
<?php 
if ($terme == ""){
    include('../components/pagination.php');}
     ?>