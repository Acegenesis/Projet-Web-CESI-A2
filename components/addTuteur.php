<form  class="" method="POST">
    <h1 class="title">Ajouter un tuteur :</h1>
    <label for="login">login  :</label>
    <input type=text name=login id=login class="formInput" placeholder="Ecrire le login du tuteur ..." pattern="^[a-zA-Z]+\.[a-zA-Z]+$" onkeydown="return /[a-z.]/i.test(event.key)" required>

    <label for="motDePasse">motDePasse :</label>
    <input type=text name=motDePasse id=motDePasse class="formInput" placeholder="Ecrire le mot de passe ..." minlength="8" required>

    <select id="campus" name = "campus">
        <?php 
            $gestion = new Gestion($conn);
            $campusList = $gestion->getCampus();
            foreach($campusList as $campus) {
                    $id_campus = $campus['id_campus'];
                    $name_campus = $campus['name_campus'];
                    ?>
                    <option value="<?php echo "$id_campus"; ?>"><?php echo "$name_campus" ?></option>     
        <?php } ?>
        </select>
    
   <input type="submit" value="Ajouter tuteur" name="s" />
</form>   