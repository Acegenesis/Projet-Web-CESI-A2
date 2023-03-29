<?php $a = 2; ?>

<div class="gestionBtn"><a href="../pages/studentAdd.php">Ajouter  nouvel eleve</a></div>


<div class="list">
    <?php  
        include ('../class/user.php');
        $users = new User($conn);        
        $list = $users->getEleve();
        foreach($list as $user) {
            $id = $user['id_users'];
            $name = explode('.', $user['login'])[0];
            $surname = explode('.', $user['login'])[1];
            $promotion = $user['name_promotion'];
            $camp= $user['name_campus'];
            include('../components/general/itemListEleve.php');
        }
    ?>
</div>
