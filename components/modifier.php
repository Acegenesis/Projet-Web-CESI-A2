<?php
include ('../fonctions/gestions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des données du formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];


    // Modification de l'utilisateur dans la base de données
    $stmt = $pdo->prepare("UPDATE users SET nom = :nom WHERE id = :id");
    $stmt->execute(['nom' => $nom, 'id' => $id]);

    // Redirection vers la page principale
    header("Location: gestion.php");
    exit();
} else {
    // Récupération de l'ID de l'utilisateur à modifier
    $id = $_GET['id'];

    // Récupération des données de l'utilisateur à partir de la base de données
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

    // Affichage du formulaire de modification
    echo "<h1>Modifier un tuteur</h1>";
    echo "<form method='post' action='modifier.php'>";
    echo "<input type='hidden' name='id' value='".$id."'>";
    echo "<label for='nom'>Nom :</label>";
    echo "<input type='text' name='nom' id='nom' value='".$utilisateur['nom']."' required><br>";
    echo "<input type='submit' value='Modifier'>";
    echo "</form>";
}
?>