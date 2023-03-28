<?php
include ("../class/gestions.php");
include ("itemList2.php");

$id = htmlspecialchars($_POST['id']);
$name= htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$campus = htmlspecialchars($_POST['campus']);
$image_users = htmlspecialchars($_POST['image_users']);
$login = $name.'.'. $surname;

$gestion = new gestion($conn);
$gestion->updateEleve($id, $login, $campus, $image_users);
?>
