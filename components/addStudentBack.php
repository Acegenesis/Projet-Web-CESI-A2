<?php 
include('../class/gestions.php');

include('../components/addstudent.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$login = @$_POST['login'];
    $motDePasse = @$_POST['motDePasse'];
	$promo = @$_POST['promo'];
	
	echo $login;
	echo $motDePasse;
	echo $promo;
    $mdp = @hash('sha256',$motDePasse);
	
	@$newTutor = new Gestion($conn);
	@$newTutor->addStudent($login, $mdp, $promo);
};
	

?>

