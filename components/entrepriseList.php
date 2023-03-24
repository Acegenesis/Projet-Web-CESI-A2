<?php $a = 1; ?>
<?php include('../components/search.php'); ?>

<div class="list">
    <?php
        include('../fonctions/entreprise.php');

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 4;
        $offset = $limit * ($page - 1);

        $entreprises = new Entreprise($conn);

        $total = count($entreprises->getAll());
        $pages = ceil($total / $limit);
        $entreprises_list = $entreprises->getAllWithLimitEntreprise($limit, $offset);

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
<div class="pagination">
    <?php if($page > 1) { ?>
        <a href="?page=<?php echo $page - 1 ?>"><</a>
    <?php } ?>

        <a href="?page=<?php echo $page ?>"><?php echo "$page"; ?></a>

    <?php if($page < $pages) { ?>
        <a href="?page=<?php echo $page + 1 ?>">></a>
    <?php } ?> 
</div>