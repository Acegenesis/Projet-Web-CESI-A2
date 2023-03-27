<div class="ajouter_truc">
    
<form  method="POST">
    <h3>nom</h3>
    <input type="text" name="nom" id="nom" placeholder="">
      
    <h3>description</h3>
    <input type="text" name="description" id="description" placeholder="">
   

    <h3>rémunération (en euros)</h3>
    <input type="number" name="rémunération" id="rémunération" placeholder="">
     
    <h3>durée (en semaines) </h3>
    <input type="number" name="durée" id="durée" placeholder="">
        
    <h3>Place</h3>
    <input type="number" name="Places" id="Places" placeholder="">
    
    <h3>Date de début</h3>
    <input type="Date" name="Date" id="Date" placeholder="">
    
    <h3>Entreprise</h3>
    <select id="entreprise" name = "entreprise">
    <?php 
   $entreprises = new entreprise($conn);
   $entreprises_list = $entreprises->getAll();
   
    foreach($entreprises_list as $entreprise) {
            $id_company = $entreprise['id_company'];
            $name = $entreprise['name_company'];
            ?>
            <option value="<?php echo "$id_company"; ?>"><?php echo "$name" ?></option>
            
       <?php } ?>

  
  </select>    
  <br>

    <input type="submit" value="chercher" name="s" />

    </form>
</div>



   