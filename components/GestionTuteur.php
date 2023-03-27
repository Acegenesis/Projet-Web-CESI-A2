<?php
include ('../fonctions/gestions.php');

    // Affichage des utilisateurs
    echo "<h1>Liste des tuteurs</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom</th><th>Actions</th></tr>";
    foreach ($utilisateurs as $utilisateurs) {
        echo "<tr>";
        echo "<td>".$utilisateurs['id']."</td>";
        echo "<td>".$utilisateurs['nom']."</td>";
        echo "<td><a href='modifier.php?id=".$utilisateurs['id']."'>Modifier</a> | <a href='supprimer.php?id=".$utilisateurs['id']."'>Supprimer</a></td>";
        echo "</tr>";
    }

    echo "</table>";

    // Formulaire d'ajout d'un utilisateur
    echo "<h2>Ajouter un tuteur</h2>";
    echo "<form method='post' action='ajouter.php'>";
    echo "<label for='nom'>Nom :</label>";
    echo "<input type='text' name='nom' id='nom' required><br>";
    echo "<input type='submit' value='Ajouter'>";
    echo "</form>";