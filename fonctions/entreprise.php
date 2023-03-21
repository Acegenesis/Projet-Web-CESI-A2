<?php
class Entreprise {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM company");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function getMark($id) {
        $stmt = $this->conn->prepare("SELECT AVG(rating) as mark FROM company JOIN review ON company.id_company = review.id_company  WHERE company.id_company = $id;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function getLikedEntities() {
        $likedEntities = array();
        // Récupérer les identifiants des entreprises aimées par l'utilisateur
        $query = "SELECT id_company FROM likes WHERE user_id = :user_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->execute();
        // Ajouter les identifiants récupérés dans le tableau $likedEntities
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $likedEntities[] = $row['id_company'];
        }
        return $likedEntities;
    }
}

