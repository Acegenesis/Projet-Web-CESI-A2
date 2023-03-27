<div class="itemList" style="height: <?php echo ($a === 0) ? '300px' : '200px' ?>" <?php echo "id = 'item_" . $id . "'"?>>
    <img src= <?php echo $image; ?> alt  ="">
    <div class="itemText">
        <div class="itemTitle">
            <span>
                <a href="<?php echo ($a === 0) ? '../pages/stages.php?id=' . $id : '../pages/entreprises.php?id=' . $id ?>" class="name"><h3><?php echo ($a === 0)  ? $title :  $name ?></h3></a>
                <?php if($a === 0 ) : ?>
                    <a href=""><h4><?php echo $entreprise ?></h4></a>
                    <div><?php
                        if($skill) {
                            foreach($skill as $s) {
                                echo "<p>" . $s['name_skill'] . "</p>";
                            }
                        } else {
                            echo "<p> Aucune compétence </p>";
                        }
                    ?></div>
                <?php endif ?>
            </span>
            <?php ($a != 0) ? include('stars.php') : ''?>
        </div>
        <p>
            <?php echo ($a === 0) ? $description : $description ?>
        </p>
    </div>
    <?php ($a ==0) ? include("like.php") : '' ?>
</div>