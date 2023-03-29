<?php 
include('../class/entreprise.php');

include('../components/addCompany.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nom = $_POST['nom'];
    $description = $_POST['description'];
	$accStagiaires = $_POST['accStagiaires'];
	$activity = $_POST['activity'];
	$mail = $_POST['mail'];
    $adresse = $_POST['adresse'];
    $country = $_POST['country'];
	$ville = $_POST['city'];
	
	};
	

	$company = new Entreprise($conn);
	@$company->addadress($adresse,$country,$ville);
	$adress = $company->getLastAdress(); 
	$idAdress = $adress['0']['id_address'];
	@$company->addCompany($nom, $description,$accStagiaires,$activity,$mail,$idAdress);
?>
