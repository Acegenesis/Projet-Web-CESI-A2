<div class="itemList gestion">    
    <div class="itemText">
        <p><?php echo $id; ?></p>
        <p><?php echo $name; ?></p>
        <p><?php echo $activity; ?></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="tuteur_<?php echo $id ?>">
            <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
        </svg>
    </div>
    <form method="post" id="drop_<?php echo $id ?>" class="dropped">
        <div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <span>
                <label for="name<?php echo $id ?>">Name</label>
                <input type="text" name="name<?php echo $id ?>" value="<?php echo $name; ?>">
            </span>
            <span>
                <label for="description<?php echo $id ?>">Description</label>
                <textarea name="description<?php echo $id ?>" id="description<?php echo $id ?>" cols="30" rows="10"><?php echo $description; ?></textarea>
            </span>
            <span>
                <label for="activity<?php echo $id ?>">Activity</label>
                <input type="text" name="activity<?php echo $id ?>" value="<?php echo $activity; ?>">
            </span>
            <span>
                <label for="email<?php echo $id ?>">Email</label>
                <input type="text" name="email<?php echo $id ?>" value="<?php echo $mail; ?>">
            </span>
            <span>
                <label for="address<?php echo $id ?>">Addresse</label>
                <input type="text" name="address<?php echo $id ?>" value="<?php echo $address; ?>">
            </span>
            <span>
                <label for="city<?php echo $id ?>">City</label>
                <input type="text" name="city<?php echo $id ?>" value="<?php echo $city; ?>">
            </span>
            <span>
                <label for="country<?php echo $id ?>">Country</label>
                <input type="text" name="country<?php echo $id ?>" value="<?php echo $country; ?>">
            </span>
        </div>
        <div>
            <span id="svalidate_<?php echo $id ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </span>
            <span id="sdelete_<?php echo $id ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                </svg>
            </span>
        </div>
    </form>
</div>