<?php $a = 1; ?>
<?php include('../components/search.php'); ?>

<div class="list">
    <?php
        include('../fonctions/entreprise.php');
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 4;
        $offset = $limit * ($page - 1);
        $entreprises = new Entreprise($conn);
        $total = $entreprises->getNumber()[0]['COUNT(*)'];
        $pages = ceil($total / $limit);
        $entreprises_list = $entreprises->getAllOffset($limit, $offset);
        foreach($entreprises_list as $entreprise) {
            $name = $entreprise['name_company'];
            $description = $entreprise['description_company'];
            $id = $entreprise['id_company'];
            $mark = $entreprises->getMark($id);
            $image = $entreprise['image_company'];
            include('../components/itemList.php');
        }
    ?>
</div>
<?php include('../components/pagination.php'); ?>