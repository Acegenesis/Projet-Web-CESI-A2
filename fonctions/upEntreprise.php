<?php
include('bdd.php');
include('../class/entreprise.php');
$entreprise = new Entreprise($conn);
$num = $_POST['num'];
$name = $_POST['name'];
$description = $_POST['description'];
$activity = $_POST['activity'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$entreprise->updateEntreprise($num, $name, $description, $activity, $email, $address, $city, $country);
?>
