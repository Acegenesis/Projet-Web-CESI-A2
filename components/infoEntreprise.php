<?php $a = 1; ?>
<?php include('../components/search.php'); ?>

<div class="list">
    <?php
        $page = $_GET['name'];
        include('../fonctions/entrepriseSolo.php');
        $entreprises = new infoEntreprise($conn);
        foreach($entreprises->getAll($page) as $entreprise) {
            $name = $entreprise['name_company'];
            $description = $entreprise['description_company'];
            $id = $entreprise['id_company'];
            $mark = $entreprises->getMark($id);
            $image = $entreprise['image_company'];
            $nb_accepted = $entreprise['accepted'];
            $secteur = $entreprise['activity'];
            $mail = $entreprise['mail'];
            $adress = $entreprise['address'];
            $ville = $entreprise['city'];
            $pays = $entreprise['country'];

            include('../components/itemSolo.php');
        }
    ?>
</div>