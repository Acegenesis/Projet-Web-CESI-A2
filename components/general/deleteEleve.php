<?php
include ("../class/gestions.php");
include ("itemList2.php");

$id = htmlspecialchars($_POST['id']);

$gestion = new gestion($conn);
$gestion->deleteEleve($id);
?>