<form method="POST" class="itemSolo tuteur">
        <h1 class="title">Ajouter une entreprise :</h1>
        <span>
            <label for="nom">nom  :</label>
            <input type=text name=nom id=nom class="formInput" placeholder="Ecrire le nom de l'entreprise ...">
        </span>
        <span>
            <label for="description">Description:</label>
            <input type=text name=description id=description class="formInput" placeholder="Ecrire la description de l'entreprise ...">
        </span>
        <span>
            <label for="accStagiaires"> Stagiaires CESI acceptés:</label>
            <input type="number" name="accStagiaires" id="accStagiaires" class="formInput" min="0" placeholder="500">
        </span>
        <span>
            <label for="activity">Secteur d'activité:</label>
            <input type=text name=activity id=description class="formInput" placeholder="Ecrire le secteur d'activité de l'entreprise ...">
        </span>
        <span>
            <label for="mail">mail:</label>
            <input type=text name=mail id=mail class="formInput" placeholder="Ecrire le secteur mail de l'entreprise ...">
        </span>
        <span>
            <label for="adresse">adresse:</label>
            <input type=text name=adresse id=adresse class="formInput" placeholder="Ecrire l'adresse de l'entreprise ...">
        </span>
        <span>
            <label for="country">country:</label>
            <input type=text name=country id=country class="formInput" placeholder="Ecrire le pays de l'entreprise ...">
        </span>
        <span>
            <label for="city">city:</label>
            <input type=text name=city id=city class="formInput" placeholder="Ecrire la ville de l'entreprise ...">
        </span>
   <input type="submit" value="Ajouter L'entreprise" name="s" />
</form>   