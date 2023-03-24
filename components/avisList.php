<?php $a = 1; ?>
<div class="list">
    <?php
        include('../fonctions/avis.php');
        $entreprises = new infoEntreprise($conn);
        foreach($entreprises->getAll() as $entreprise) {
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

            include('../components/avis.php');
        }
    ?>
</div>