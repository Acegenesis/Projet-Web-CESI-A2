<?php $a = 2; 
?>
<div class="gestionBtn"><a href="../pages/TuteurAdd.php">Ajouter nouveau tuteur</a></div>

<div class="list">
    <?php  
        include ('../class/user.php');
        
            $users = new User($conn);        
            $list = $users->getTuteur();
        
                
        foreach($list as $user) {
            $id = $user['id_users'];
            $name = explode('.', $user['login'])[0];
            $surname = explode('.', $user['login'])[1];
            $promotion = $user['name_promotion'];
            $camp= $user['name_campus'];
            include('../components/general/itemListTuteur.php');
        }
    ?>
</div>

