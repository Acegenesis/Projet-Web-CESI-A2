<?php $a = 0; ?>
<div class="list">
    <?php  
        include('../class/stages.php');
        if ($terme == ""){
            $search = 0;
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
            $search = 1;
            $stages = new search($conn);
            $stages_list = $stages->getStages($terme);
            echo "test";
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
            include('../components/general/itemList.php');
        }
    ?>
</div>
<?php 
    if(!$search) {
        include('../components/general/pagination.php');
    }
?>