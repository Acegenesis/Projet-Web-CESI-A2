<form  class="" method="POST">
    <h1 class="title">Ajouter un tuteur :</h1>
    <br>
    <label for="login">login  :</label>
    <input type=text name=login id=login class="formInput" placeholder="Ecrire le login du tuteur ..." pattern="^[a-zA-Z]+\.[a-zA-Z]+$" onkeydown="return /[a-z.]/i.test(event.key)" required>
    <br>
    <label for="motDePasse">motDePasse :</label>
    <input type=text name=motDePasse id=motDePasse class="formInput" placeholder="Ecrire le mot de passe ..." minlength="8" required>
    <br>
    <select id="promo" name = "promo">
        <?php 
            $gestion = new Gestion($conn);
            $promoList = $gestion->getPromotion() ;
            foreach($promoList as $promo) {
                    $promoId = $promo['id_promotion'];
                    $promoName = $promo['name_promotion'];
                    ?>
                    <option value="<?php echo "$promoId"; ?>"><?php echo "$promoName" ?></option>     
        <?php } ?>
        </select>
        <br>
   <input type="submit" value="Ajouter tuteur" name="s" />
</form>   