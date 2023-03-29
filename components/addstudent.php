<form method="POST" class="itemSolo tuteur">
        <h1 class="title">Ajouter un eleve :</h1>
        <span>
                <label for="login">login  :</label>
                <input type=text name=login id=login class="formInput" placeholder="Ecrire le login de l'élève ..." pattern="^[a-zA-Z]+\.[a-zA-Z]+$" onkeydown="return /[a-z.]/i.test(event.key)" required>  
        </span>
        <span>
                <label for="motDePasse">motDePasse :</label>
                <input type=text name=motDePasse id=motDePasse class="formInput" placeholder="Ecrire le mot de passe ..." minlength="8" required>
        </span>
        <span>
                <label for="nom">Promo :</label>
                <select id="promo" name = "promo">
                        <?php 
                        $user = new User($conn);
                        $promoList = $user->getPromotion() ;
                        foreach($promoList as $promo) {
                                $promoId = $promo['id_promotion'];
                                $promoName = $promo['name_promotion'];
                                ?>
                                <option value="<?php echo $promoName; ?>"><?php echo $promoName ?></option>     
                        <?php } ?>
                </select>                
        </span>
        <span>
                <label for="campus">Campus :</label>
                <select name="campus" id="campus">
                        <?php 
                        $campusList = $user->getCampus() ;
                        print_r($campusList);
                        foreach($campusList as $campus) {
                                $campusId = $campus['id_campus'];
                                $campusName = $campus['name_campus'];
                                ?>
                                <option value="<?php echo $campusId; ?>"><?php echo $campusName ?></option>     
                        <?php } 
                        ?>
                </select>
        </span>
        <input type="submit" value="Ajouter eleve" name="s" />
</form>   