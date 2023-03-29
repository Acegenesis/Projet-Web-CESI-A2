<?php  

include('../class/gestions.php');
include('../class/user.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$login = @$_POST['login'];
    $motDePasse = @$_POST['motDePasse'];
	$promo = @$_POST['promo'];
	$campus = @$_POST['campus'];
    $mdp = @hash('sha256',$motDePasse);
	$newTutor = new User($conn);
	$newTutor->addTutor($login, $mdp, $promo, $campus);
	header('Location: /pages/gestion.php?type=tuteurs');
};
	

?>
