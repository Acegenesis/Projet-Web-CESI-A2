<?php $a = 1; ?>
<div class="list">
    <?php
        $page = $_GET['id'];
        include('../fonctions/entreprise.php');
        $entreprises = new Entreprise($conn);
        $entreprise = $entreprises->getOne($page)[0];
        $name = $entreprise['name_company'];
        $description = $entreprise['description_company'];
        $id = $entreprise['id_company'];
        $mark = $entreprises->getMark($id);
        $image = $entreprise['image_company'];
        $nb_accepted = $entreprise['accepted'];
        $secteur = $entreprise['activity'];
        $email = $entreprise['mail'];
        $address = $entreprise['address'];
        $city = $entreprise['city'];
        $country = $entreprise['country'];
        include('../components/itemSolo.php');
    ?>
</div>