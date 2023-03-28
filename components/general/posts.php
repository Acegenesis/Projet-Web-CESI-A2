<div class="itemSolo comments">
    <?php 
        $posts = new Entreprise($conn);
        $id = $_GET['id'];
        $postList = $posts->getPost($id);
        foreach($postList as $post) {
        ?>
        <div class="postLi">
            <span>
                <img src="<?php echo $post["image_users"] ?>" alt="<?php echo $post["login"] . ' picture' ?>">
                <p><?php echo $post["login"] ?></p>
                <?php 
                    $mark[0]['mark'] = $post["rating"]; 
                    include ('../components/general/stars.php');
                ?>
            </span>
            <p class="text"><?php echo $post["comments"] ?></p>
        </div>
        <?php
        }
    ?>
    <form action="../fonctions/post.php" method="post">
        <h3>Ecrire un commentaire</h3>
        <textarea name="post" id="post" placeholder="Enter your comment ..."></textarea>
        <span>
            <label for="note">Note (entre 0 et 5) :</label>
            <input type="number" name="note" id="note" min="0" max="5" step="0.1" value="2.5">
        </span>
        <input type="hidden" name="id" id="id" value="<?php echo $_GET["id"] ?>">
        <input type="submit" value="Envoyer">
    </form>
</div>