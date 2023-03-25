<div class="itemList" style="height: <?php echo ($a === 0) ? '300px' : '600px' ?>" <?php echo "id = 'item_" . $id . "'"?>>
    
    <img src= <?php echo $image; ?> alt  ="">
    <div class="itemText" id="block">
        <div class="itemTitle">
            <span>
                <a href="" class="name"><h3><?php echo ($a === 0)  ? $title :  $name ?></h3></a>
                <?php if($a === 0 ) : ?>
                    <a href=""><h4><?php echo $entreprise ?></h4></a>
                    
                <?php endif ?>
            </span>
            <?php ($a != 0) ? include('stars.php') : ''?>
        </div>
        <p>
            <?php echo ($a === 0) ? $description : $description ?>
        <p>
        <br>
        <div class="itemTitle">
            <span>
                    <a href=""><h4>Stagiaire CESI déjà acceptés: </h4></a>
            </span>
        </div>
        <div class="itemTitle">
            <span>
        <h4><?php echo $nb_accepted ?></h4>
            </span>
        </div>
        

        <div class="itemTitle">
            <span>
                    <a href=""><h4>Secteur d'activité: </h4></a>
            </span>
        </div>

        <div class="itemTitle">
            <span>
        <h4><?php echo $secteur ?></h4>
            </span>
        </div>

        <div class="itemTitle">
            <span>
                    <a href=""><h4>Contact:</h4></a>
            </span>
        </div>


        <div class="itemTitle">
            <span>
        <h4><?php echo $mail ?></h4>
            </span>
        </div>


        <div class="itemTitle">
            <span>
                    <a href=""><h4>Adresse:</h4></a>
            </span>
            
        </div>
        <p>
            <?php echo ($a === 0) ? $adress : $adress;?>
            <?php echo ($a === 0) ? $ville : $ville;?>
            <?php echo ($a === 0) ? $pays : $pays; ?>
            <?php echo ($a === 0) ? $name : $name; ?>


        <p>
        <br>
    </div>


    