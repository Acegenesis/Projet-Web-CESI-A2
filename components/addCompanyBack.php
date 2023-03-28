<?php 
include('../class/gestions.php');

include('../components/addCompany.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nom = $_POST['nom'];
    $description = $_POST['description'];
	$accStagiaires = $_POST['accStagiaires'];
	$activity = $_POST['activity'];
	$mail = $_POST['mail'];
    $adresse = $_POST['adresse'];
    $country = $_POST['country'];
	$ville = $_POST['ville'];
	
	};
	
	//echo $nom." ";
	//echo $description." ";
	//echo $remuneration." ";
	//echo $duree." ";
	//echo $places." ";
	//echo $date_post." ";
	//echo $date_stage." ";
	
	//echo $entreprise." ";
	//print_r( $competence);

	

	$company = new Gestion($conn);
	$company->addCompany($nom, $description,$accStagiaires,$activity,$mail);
?>
