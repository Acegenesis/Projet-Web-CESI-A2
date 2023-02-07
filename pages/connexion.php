<?php
include("header.php");
?>
<form method="post" class="login">
    <h1>Se connecter</h1>
    <fieldset>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Se connecter">
        <input type="reset" value="Réinitialiser">    
    </fieldset> 
</form>

<?php
include("footer.php");
?>