<form  class="" method="POST">
    <h1 class="title">Ajouter une entreprise :</h1>
    <label for="nom">nom  :</label>
    <input type=text name=nom id=nom class="formInput" placeholder="Ecrire le nom de l'entreprise ...">
    <br>

    <label for="description">Description:</label>
    <input type=text name=description id=description class="formInput" placeholder="Ecrire la description de l'entreprise ...">
    <br>
    <label for="accStagiaires"> Stagiaires CESI acceptés:</label>
    <input type="number" name="accStagiaires" id="accStagiaires" class="formInput" min="0" step="0.5" placeholder="500">
    
    <br>
    <label for="activity">Secteur d'activité:</label>
    <input type=text name=activity id=description class="formInput" placeholder="Ecrire le secteur d'activité de l'entreprise ...">
    <br>
    <label for="mail">mail:</label>
    <input type=text name=mail id=mail class="formInput" placeholder="Ecrire le secteur mail de l'entreprise ...">
    <br>
    <label for="adresse">adresse:</label>
    <input type=text name=adresse id=adresse class="formInput" placeholder="Ecrire l'adresse de l'entreprise ...">
    <br>
    <label for="country">country:</label>
    <input type=text name=country id=country class="formInput" placeholder="Ecrire le pays de l'entreprise ...">
    <br>
    <label for="ville">ville:</label>
    <input type=text name=ville id=ville class="formInput" placeholder="Ecrire la ville de l'entreprise ...">
    

    
    <br>
   <input type="submit" value="Ajouter L'entreprise" name="s" />
</form>   