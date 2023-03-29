<div class="itemList gestion">    
    <div class="itemText">
        <p><?php echo $id; ?></p>
        <p><?php echo $name; ?></p>
        <p><?php echo $surname; ?></p>
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
                <label for="surname<?php echo $id ?>">Surname</label>
                <input type="text" name="surname<?php echo $id ?>" value="<?php echo $surname; ?>">
            </span>
            <span>
                <label for="promo<?php echo $id ?>">Promotion</label>
                <select name="promo<?php echo $id ?>" id="promo">
                    <?php
                        $promos = $users->getPromotion();
                        foreach($promos as $promo) {
                            if ($promo['name_promotion'] === $promotion) {
                                echo '<option selected data="' .$promo['id_promotion'] . '">'.$promo['name_promotion'].'</option>';
                            } else {
                                echo '<option data="' .$promo['id_promotion'] . '">' . $promo['name_promotion'] . '</option>';             
                            }
                        }
                    ?>
                </select>
            <span>
                <label for="campus<?php echo $id ?>">Campus</label>
                <select name="campus<?php echo $id ?>" id="campus">
                    <?php
                        $campuses = $users->getCampus();
                        foreach($campuses as $campus) {
                            if ($campus['name_campus'] === $camp) {
                                echo '<option name="campus" selected data="' .$campus['id_promotion'] . '">'.$campus['name_campus'].'</option>';
                            } else {
                                echo '<option name="campus" data="' .$campus['id_promotion'] . '">' . $campus['name_campus'] . '</option>';             
                            }
                        }
                    ?>
                </select>
            </span>
        </div>
        <div>
            <span id="evalidate_<?php echo $id ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
                <input type="submit" name="update" value="Update">
            </span>
            <span id="edelete_<?php echo $id ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" >
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                </svg>
            </span>
        </div>
    </form>
</div>