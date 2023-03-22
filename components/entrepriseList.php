<?php $a = 1; ?>
<?php include('../components/search.php'); ?>

<div class="list">
    <?php
        include('../fonctions/entreprise.php');
        $entreprises = new Entreprise($conn);
        foreach($entreprises->getAll() as $entreprise) {
            $name = $entreprise['name_company'];
            $description = $entreprise['description_company'];
            $id = $entreprise['id_company'];
            $mark = $entreprises->getMark($id);
            include('../components/itemList.php');
        }
    ?>
</div>