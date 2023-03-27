<?php
include('../fonctions/entreprise.php');
include('../fonctions/stages.php');
include('../components/modif_stage.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nom = $_POST['nom'];
    $description = $_POST['description'];
	$rémunération = $_POST['rémunération'];
	$durée = $_POST['durée'];
	$places = $_POST['Places'];
    $date_stage = $_POST['Date'];
    $entreprise = $_POST['entreprise'];
	$date_post = date('d-m-y');

	echo $nom." ";
	echo $description." ";
	echo $rémunération." ";
	echo $durée." ";
	echo $places." ";
	echo $date_post." ";
	echo $date_stage." ";
	
	echo $entreprise." ";
	

	$stages = new Stage($conn);
	$stages->addStage($nom,$description,$places,$durée,$rémunération,$date_post,$date_stage,$entreprise);
}

?>