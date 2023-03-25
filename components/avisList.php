<?php $a = 1; ?>
<div class="list">
    <?php
        include('../fonctions/avis.php');
        $avis = new avis($conn);
        foreach($avis->getAll($page) as $avi) {
            $name = $avi['login'];
            $commentaire = $avi['comments'];
            $note = $avi['rating'];
            $image = $avi['image_users'];

            

            include('../components/avis.php');
        }
    ?>
</div>