<div class="itemList" style="height: <?php echo ($a === 0) ? '250px' : '200px' ?>">
    <img src="../assets/img/max.png" alt="">
    <div class="itemText">
        <div class="itemTitle">
            <span>
                <h3><?php echo ($a === 0)  ? "Stage MA2T" : "Entreprise MA2T" ?></h3>
                <?php if($a === 0 ) : ?>
                    <h4>EntrePRise StraZIZI</h4>
                <?php endif ?>
            </span>
            <?php include('stars.php') ?>
        </div>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia accusantium accusamus, mollitia doloremque
            incidunt vero sunt error, quasi fugiat facilis beatae adipisci, numquam animi eaque porro vitae rerum.
            Impedit, nulla?
        </p>
    </div>
    <?php include("like.php") ?>
</div>