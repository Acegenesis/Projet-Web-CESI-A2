<?php
class User {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function getUser($id) {
        $sql = "SELECT login, image_users, status FROM users WHERE id_users = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getAdress($id) {
        $sql = "SELECT name_promotion, name_campus, address, country, city FROM users JOIN promotion ON users.id_promotion = promotion.id_promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address WHERE id_users = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    function getPromotion() {
        $stmt = $this->conn->prepare("SELECT name_promotion FROM promotion");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getCampus() {
        $stmt = $this->conn->prepare("SELECT name_campus FROM campus");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getTuteur() {
        $stmt = $this->conn->prepare("SELECT name_promotion, name_campus, login, id_users FROM users JOIN promotion ON users.id_promotion = promotion.id_promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address where status = 'tuteur';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function updateTuteur($id_users, $login, $campus, $promotion) {
        $stmt = $this->conn->prepare("SELECT id_promotion FROM promotion WHERE name_promotion = :promotion");
        $stmt->bindParam(':promotion', $promotion);
        $stmt->execute();
        $id_promotion = $stmt->fetch(PDO::FETCH_ASSOC)['id_promotion'];
        $stmt = $this->conn->prepare("SELECT id_campus FROM campus WHERE name_campus = :campus");
        $stmt->bindParam(':campus', $campus);
        $stmt->execute();
        $id_campus = $stmt->fetch(PDO::FETCH_ASSOC)['id_campus'];
        $stmt = $this->conn->prepare("SELECT * FROM promotion WHERE id_campus = :id_campus AND id_promotion = :id_promotion AND name_promotion = :promotion");
        $stmt->bindParam(':id_campus', $id_campus);
        $stmt->bindParam(':id_promotion', $id_promotion);
        $stmt->bindParam(':promotion', $promotion);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result) {
            $stmt = $this->conn->prepare("UPDATE users SET login = :login, id_promotion = :id_promotion WHERE id_users = :id_users;");
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':id_promotion', $id_promotion);
            $stmt->bindParam(':id_users', $id_users);
            $stmt->execute();
        } else {
            $stmt = $this->conn->prepare("INSERT INTO promotion (id_promotion, name_promotion, id_campus) VALUES (:id_promotion, :promotion, :id_campus)");
            $stmt->bindParam(':id_promotion', $id_promotion);
            $stmt->bindParam(':promotion', $promotion);
            $stmt->bindParam(':id_campus', $id_campus);
            $stmt->execute();
            $stmt = $this->conn->prepare("SELECT id_promotion FROM promotion WHERE name_promotion = :promotion AND id_campus = :id_campus AND id_promotion = :id_promotion");
            $stmt->bindParam(':promotion', $promotion);
            $stmt->bindParam(':id_campus', $id_campus);
            $stmt->bindParam(':id_promotion', $id_promotion);
            $stmt->execute();
            $id_promotion = $stmt->fetch(PDO::FETCH_ASSOC)['id_promotion'];
            $stmt = $this->conn->prepare("UPDATE users SET login = :login, id_promotion = :id_promotion WHERE id_users = :id_users;");
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':id_promotion', $id_promotion);
            $stmt->bindParam(':id_users', $id_users);
            $stmt->execute();
        }
    }

    function updateEleve($id_users, $login, $id_promotion) {
        $stmt = $this->conn->prepare("UPDATE users SET login = :login, id_promotion = :id_promotion WHERE id_users = :id_users;");
        $stmt->execute();
    }

    function deleteTuteur($id_users) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id_users = :id_users");
        $stmt->execute();
    }

    function deleteEleve($id_users) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id_users = :id_users");
        $stmt->execute();
    }
    function addTutor($login, $password, $id_promotion) {
        if ($login == "" || $password == "" || $id_promotion == "" ) {
            echo "remplissez tous les champs svp";
        }
        else{
            $stmt = $this->conn->prepare("INSERT INTO users (login, password,status, id_promotion) VALUES (:login, :password, 'Tuteur', :id_promotion)");
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':id_promotion', $id_promotion);

            $stmt->execute();
        }
    }
}


