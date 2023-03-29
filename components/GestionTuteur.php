<?php $a = 2; 

if ($terme == ""){ 
    ?>
<div class="gestionBtn"><a href="../pages/TuteurAdd.php">Ajouter nouveau tuteur</a></div>
<?php }?>
<div class="list">
    <?php  
        include ('../class/user.php');
        $users = new User($conn);        

        if ($terme == ""){
            $list = $users->getTuteur();
        }
        else
        {
            $search = 1;
            $stages = new search($conn);
            $list = $stages->getperson($terme);
        }  
                
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

