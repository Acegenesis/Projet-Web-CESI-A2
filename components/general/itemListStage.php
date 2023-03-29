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
                <label for="name<?php echo $id ?>">Intitulé</label>
                <input type="text" name="name<?php echo $id ?>" value="<?php echo $title; ?>">
            </span>
            <span>
                <label for="surname<?php echo $id ?>">Entreprise</label>
                <select name="surname<?php echo $id ?>" id="surname">
                    <?php
                        require_once '../class/Entreprise.php';
                        $ent = new Entreprise($conn);
                        $ents = $ent->getAll();
                        foreach($ents as $e) {
                            if ($e['name_company'] === $company) {
                                echo '<option selected data="' .$e['id_company'] . '">'.$e['name_company'].'</option>';
                            } else {
                                echo '<option data="' .$e['id_company'] . '">' . $e['name_company'] . '</option>';             
                            }
                        }
                    ?>
                </select>
            </span>
            <span>
                <label for="address<?php echo $id ?>">Description</label>
                <input type="text" name="surname" value="<?php echo $description; ?>">
            </span>
            <span>
                <label for="places<?php echo $id ?>">Places libres</label>
                <input type="number" min="0" name="places" value="<?php echo $place; ?>">
            </span>
            <span>
                <label for="duree<?php echo $id ?>">Durée</label>
                <input type="text" name="duree<?php echo $id ?>" value="<?php echo $duration; ?>">
            </span>
            <span>
                <label for="argent<?php echo $id ?>">Rémuneration</label>
                <input type="text" name="argents<?php echo $id ?>" value="<?php echo $remuneration; ?>">
            </span>
            <span>
                <label for="start<?php echo $id ?>">Début</label>
                <input type="date" name="start<?php echo $id ?>" value="<?php echo $start; ?>">
            </span>
        </div>
        <div>
            <span id="wvalidate_<?php echo $id ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </span>
            <span id="wdelete_<?php echo $id ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                </svg>
            </span>
        </div>
    </form>
</div>