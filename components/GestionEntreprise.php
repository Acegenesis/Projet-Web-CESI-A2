<?php $a = 2; ?>
<a href="../pages/CompanyAdd.php" class="name"><h3>ajouter nouvelle entreprise</h3></a>

<div class="list">
    <?php  
        include ('../class/gestions.php');
        $gestion = new Gestion($conn);
        $list = $gestion->getEntreprise();

        foreach($list as $comp) {
            $id = $comp['id_company'];
            $name = $comp['name_company'];
            $description = $comp['description_company'];
            $activity= $comp['activity'];
            $mail = $comp['mail'];
            $address = $comp['address'];
            $country = $comp['country'];
            $city = $comp['city'];
            $accepted = $comp['accepted'];
            $image = $comp['image_company'];

            include('../components/general/itemListEntreprise.php');
        }
    ?>
</div>