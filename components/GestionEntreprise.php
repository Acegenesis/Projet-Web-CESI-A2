<div class="gestionBtn"><a href="../pages/CompanyAdd.php">Ajouter  nouvelle entreprise</a></div>
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
            include('../components/general/itemListEntreprise.php');
        }        
    ?>
</div>