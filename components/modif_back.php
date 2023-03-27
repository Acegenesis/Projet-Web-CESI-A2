<?php
include('../components/modif_stage.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nom = $_POST['nom'];
    $description = $_POST['description'];
	$rémunération = $_POST['rémunération'];
	$durée = $_POST['durée'];
	$Places = $_POST['Places'];
    $Date = $_POST['Date'];
    $entreprise = $_POST['entreprise'];
}


?>