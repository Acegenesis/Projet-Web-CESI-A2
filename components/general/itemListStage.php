<div class="itemList gestion">    
    <div class="itemText">
        <p><?php echo $id; ?></p>
        <p><?php echo $title; ?></p>
        <p><?php echo $company; ?></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="tuteur_<?php echo $id ?>">
            <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
        </svg>
    </div>
    <form method="post" id="drop_<?php echo $id ?>" class="dropped">
        <div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <span>
                <label for="name">Intitulé</label>
                <input type="text" name="name" value="<?php echo $title; ?>">
            </span>
            <span>
                <label for="surname">Entreprise</label>
                <input type="text" name="surname" value="<?php echo $company; ?>">
            </span>
            <span>
                <label for="address">Description</label>
                <input type="text" name="surname" value="<?php echo $description; ?>">
            </span>
            <span>
                <label for="city">Places libres</label>
                <input type="text" name="surname" value="<?php echo $place; ?>">
            </span>
            <span>
                <label for="country">Durée</label>
                <input type="text" name="surname" value="<?php echo $duration; ?>">
            </span>
            <span>
                <label for="country">Rémuneration</label>
                <input type="text" name="surname" value="<?php echo $remuneration; ?>">
            </span>
            <span>
                <label for="country">Début</label>
                <input type="text" name="surname" value="<?php echo $start; ?>">
            </span>
        </div>
        <div>
            <span id="validate_<?php echo $id ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
                <input type="submit" name="update" value="Update">
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" id="delete_<?php echo $id ?>">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                </svg>
                <input type="submit" name="delete" value="Delete">
            </span>
        </div>
    </form>
</div>