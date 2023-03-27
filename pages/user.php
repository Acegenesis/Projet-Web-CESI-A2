<?php
    include('../components/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/sign.php');
    else :
        include('../components/header.php');
        include('../components/navBar.php');
        include('../fonctions/user.php');
        $cuser = new User($conn);
        $current = $cuser->getUser($_COOKIE['id']);
        $name = explode('.', $current['login'])[0];
        $surname = explode('.', $current['login'])[1];
        $address = $cuser->getAdress($_COOKIE['id']);
?>
<div class="userDesc">
    <h1>Profil</h1>
    <img src="<?php echo $current["image_users"] ?>" alt="elou">
    <div>
        <p>Nom : <?php echo $name; ?></p>
        <p>Prénom : <?php echo $surname; ?></p>
        <p>Promotion : <?php echo $address['name_promotion']; ?></p>
        <p>Campus : <?php echo $address['name_campus']; ?></p>
        <p>Adresse : <?php echo $address['address'] . ' ' . $address['city'] . ' ' . $address['country']; ?></p>
    </div>
    <h3>Téléversez votre CV</h3>
    <span>
        <input type="file" id="CV" name="CV" accept=".doc, .docx, .pdf, .png, .jpg" >
        <label for="CV">Clickez ici pour téléverser votre fichier (formats acceptés : pdf, doc, png) </label>
    </span>
    <h3>Téléversez votre lettre de motivation</h3>
    <span>
        <input type="file" id="LM" name="LM"  accept=".doc, .docx, .pdf, .png, .jpg" >
        <label for="LM">Clickez ici pour téléverser votre fichier (formats acceptés : pdf, doc, png) </label>
    </span>
</div>
<div class="logout">
    <button id="logoutBtn" onclick="location.href='logout.php'">LOG OUT</button>
</div>
<script src="../assets/JS/filetype.js"></script>

<?php
include('../components/footer.php');
endif;
?>