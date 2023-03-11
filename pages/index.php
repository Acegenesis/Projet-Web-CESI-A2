<?php include('../components/header.php'); ?>
<?php $a = 0; ?>
<?php include('../components/search.php'); ?>

<div class="list">
    <?php 
        $id = 1;
        for ($i=0; $i < 20; $i++) {
            include('../components/itemList.php');
            $id++;
        } 
    ?>
</div>


<?php include('../components/footer.php') ?>
