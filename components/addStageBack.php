<?php
include('../class/entreprise.php');
include('../class/stages.php');
include('../components/addStage.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nom = $_POST['nom'];
    $description = $_POST['description'];
	$remuneration = $_POST['rémunération'];
	$duree = $_POST['durée'];
	$places = $_POST['Places'];
    $date_stage = $_POST['Date'];
    $entreprise = $_POST['entreprise'];
	$date_post = date('d-m-y');
	$competence = [];
	for ($i = 1; $i <= count($stage_skill); $i++){
		if (@$_POST[$i] != ""){

	@array_push($competence,$_POST[$i]);
		}
	};
	

	$stages = new Stage($conn);
	$stages->addStage($nom,$description,$places,$duree,$remuneration,$date_post,$date_stage,$entreprise);
	if ($nom == "" || $description == "" || $places == "" || $duree == "" || $remuneration == "" || $date_post == "" || $date_stage == "" || $entreprise == "") {
	echo "remplissez tous les champs svp";
	}


	else{
		$LeStageEnQuestion = $stages->getLastStage();
		print_r($LeStageEnQuestion);
		$idStage = $LeStageEnQuestion['0']['id_internship'];
		for($i = 0; $i < count($competence); $i++){
		echo "ça requete";
		$stages->addCompetences($idStage,$competence[$i]);
	}
	}
}
?>