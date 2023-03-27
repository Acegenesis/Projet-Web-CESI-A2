<?php
    include('../components/header.php');
    if (!isset($_COOKIE['id'])) : 
        include('../components/sign.php');
    else :
      include('../components/header.php');
      include('../components/navBar.php');
      include('../fonctions/user.php');
?>
  <div class="itemSolo">
    <h1>Mentions légales</h1>
    <ul>
      <li><strong>Cesi Ton Stage</strong></li>
      <li>Siège social: 18 rue du donon, Wolfisheim, 67202, France</li>
      <li>SIRET : 14975937</li>
      <li>Email : contact@cesitonstage.com</li>
      <li>Numéro de téléphone : +33 781080022</li>
    </ul>
    <h1>Responsable de la publication</h1>
    <ul>
      <li>Nom : Mattéo Tremisi</li>
      <li>Email : matteo.tremisi@viacesi.fr</li>
    </ul>
    <h1>Hébergeur du site</h1>
    <ul>
      <li>Nom : OVH</li>
      <li>Adresse : Rue brulée 67000 </li>
      <li>Numéro de téléphone : 03 33 44 55 66</li>
    </ul>
    <h1>Protection des données personnelles</h1>
    <p>Conformément à la loi française et européenne, nous protégeons les données personnelles des utilisateurs de notre site web. Les informations collectées sont utilisées uniquement pour fournir le service de stages à nos utilisateurs. Nous ne vendons pas ces données à des tiers.</p>
    <h1>Propriété intellectuelle</h1>
    <p>Tous les contenus publiés sur notre site web sont la propriété de Cesi Ton Stage et sont protégés par les lois sur la propriété intellectuelle. Les utilisateurs ne sont pas autorisés à copier, reproduire ou distribuer ces contenus sans notre autorisation.</p>
    <h1>Conditions générales d'utilisation</h1>
    <ul>
      <li>Les utilisateurs de notre site web doivent être des étudiants à la recherche de stages.</li>
      <li>Les utilisateurs doivent fournir des informations précises lors de leur inscription.</li>
      <li>Nous nous réservons le droit de refuser l'accès à notre site web à tout utilisateur ne respectant pas nos conditions d'utilisation.</li>
      <li>Les utilisateurs ne sont pas autorisés à utiliser notre site web à des fins illégales ou frauduleuses.</li>
      <li>Nous ne sommes pas responsables des dommages directs ou indirects causés par l'utilisation de notre site web.</li>
      <li>Nous nous réservons le droit de modifier nos termes et conditions générales d'utilisation à tout moment.</li>
    </ul>
  </div>
<?php
include('../components/footer.php');
endif;
?>