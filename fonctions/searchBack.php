<?php

include('../class/search.php');
$terme = "";

if (isset($_GET["s"]) AND $_GET["s"] == "chercher")
{   print_r($_GET["s"]);
    //$_GET["search"] = htmlspecialchars($_GET["search"]);
    $terme = $_GET["search"];
    $terme = trim($terme);
    $terme = strip_tags($terme);
}
?>