<?php
class Gestion {
    private $conn;
    function __construct($conn) {
        $this->conn = $conn;
    }

    function getTuteur() {
        $stmt = $this->conn->prepare("SELECT * FROM users JOIN promotion ON users.id_promotion = promotion.id_promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address where status = 'tuteur';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getEleve() {
        $stmt = $this->conn->prepare("SELECT * FROM users JOIN promotion ON users.id_promotion = promotion.id_promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address where status = 'eleve';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getEntreprise() {
        $stmt = $this->conn->prepare("SELECT * FROM company JOIN address ON company.id_address = address.id_address;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getStage() {
        $stmt = $this->conn->prepare("SELECT * FROM internship JOIN company ON internship.id_company = company.id_company JOIN address ON company.id_address = address.id_address;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function updateTuteur($id, $login, $id_promotion) {
        $stmt = $this->conn->prepare("UPDATE users 
        JOIN promotion ON users.id_promotion = promotion.id_promotion
        SET login = :login, id_promotion = :id_promotion WHERE id = :id;");
        $stmt->execute();
    }

    function updateEleve($id, $login, $id_promotion) {
        $stmt = $this->conn->prepare("UPDATE users SET login = :login, id_promotion = :id_promotion WHERE id = :id;");
        $stmt->execute();
    }

    function updateCompany($id, $name, $description, $activity, $mail, $address, $country, $city, $accepted, $image) {
        $stmt = $this->conn->prepare("UPDATE company SET login = :login, name_campus = :name_campus, image_users = :image_users WHERE id = :id");
        $stmt->execute();
    }

    function deleteTuteur($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute();
    }

    function deleteEleve($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute();
    }

    function deleteCompany($id) {
        $stmt = $this->conn->prepare("DELETE FROM company WHERE id = :id");
        $stmt->execute();
    }

 

    
  

    function getPromotion() {
        $stmt = $this->conn->prepare("SELECT * FROM promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getCampus() {
        $stmt = $this->conn->prepare("SELECT * FROM campus JOIN address ON campus.id_address = address.id_address;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    
}
