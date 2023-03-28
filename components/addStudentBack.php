<?php 
include('../class/gestions.php');

include('../components/addstudent.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$login = @$_POST['login'];
    $motDePasse = @$_POST['motDePasse'];
	$campus = @$_POST['campus'];
    echo "marche";
	};
	
	
		
    $mdp = @hash('sha256',$motDePasse);
	

	@$newTutor = new Gestion($conn);
	@$newTutor->addStudent($login, $mdp, $campus);
	if (@$login == "" || @$password == "" || @$campus == "" ) {
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

?>

