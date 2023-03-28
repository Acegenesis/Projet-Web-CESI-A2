<form  class="" method="POST">
    <h1 class="title">Ajouter un stage :</h1>

    <label for="nom">Nom du stage :</label>
    <input type="text" name="nom" id="nom" placeholder="Ecrire le nom du stage ...">
    <br>
    <label for="description">Description :</label>
    <input type="text" name="description" id="description" placeholder="Ecrire la description du stage ...">
    <br>
    <label for="rémunération">Rémunération (en euros) :</label>
    <input type="number" name="rémunération" id="rémunération" min="0" step="0.5" placeholder="500">
    <br>
    <label for="durée">Durée (en jours) :</label>
    <input type="number" name="durée" id="durée" min="1" placeholder="30">
    <br>  
    <label for="Places">Nombre de places :</label>
    <input type="number" name="Places" id="Places" min="1" placeholder="10">
    <br>
    <label for="Date">Date :</label>
    <input type="Date" name="Date" id="Date">
    <br>
    <label for="entreprise">Entreprise :</label>
    <select id="entreprise" name = "entreprise">
        <?php 
            $entreprises = new entreprise($conn);
            $entreprises_list = $entreprises->getAll();
            $stage = new Stage($conn);
            $stage_skill = $stage->getAllSkills();

            foreach($entreprises_list as $entreprise) {
                    $id_company = $entreprise['id_company'];
                    $name = $entreprise['name_company'];
                    ?>
                    <option value="<?php echo "$id_company"; ?>"><?php echo "$name" ?></option>     
        <?php } ?>
        <br>
    </select>
    <h3 for="skill" class="skills">Compétences :</h3>
    <?php 
        foreach($stage_skill as $skill) {
                    $idSkill = $skill['id_skill'];
                    $nameSkill = $skill['name_skill'];
                    ?>
        <span>
            <input type="checkbox" id="<?php echo $idSkill ?>" name="<?php echo $idSkill ?>" value="<?php echo $idSkill ?>">
            <label for="<?php echo $idSkill ?>"><?php echo $nameSkill ?></label>
        </span>
    <?php };?>
    <br>
   <input type="submit" value="Ajouter un stage" name="s" />
</form>   