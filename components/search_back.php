<?php
include('../fonctions/search.php');

include('../components/search.php');

$terme = "";
if (isset($_GET["s"]) AND $_GET["s"] == "chercher")
{
 $_GET["search"] = htmlspecialchars($_GET["search"]); //pour sécuriser le formulaire contre les failles html
 $terme = $_GET["search"];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête
}


?>