<?php

include('../class/gestions.php');
include('../class/user.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$login = @$_POST['login'];
	$motDePasse = @$_POST['motDePasse'];
	$promo = @$_POST['promo'];
	$campus = @$_POST['campus'];


	// Vérifiez si le formulaire a été soumis
	if (isset($_POST['submit'])) {
		$login = $_POST['email'];
		$motDePasse = $_POST['email'];
		$promo = $_POST['email'];
		$campus = $_POST['email'];


		// Vérifiez si le champ email est vide
		if (empty($login)) {
			echo "Le champ login est obligatoire.";
		}
		// Vérifiez si le champ motDePasse est vide
		else if (empty($motDePasse)) {
			echo "Le champ motDePasse est obligatoire.";
		}
		// Vérifiez si le champ promo est vide
		else if (empty($promo)) {
			echo "Le champ promo est obligatoire.";
		}
		// Vérifiez si le champ campus est vide
		else if (empty($campus)) {
			echo "Le champ campus est obligatoire.";
		} else {
			$mdp = @hash('sha256', $motDePasse);
			$newEleve = new User($conn);
			$newEleve->addEleve($login, $mdp, $promo, $campus);
			header('Location: /pages/gestion.php?type=students');
		}
	}
};
