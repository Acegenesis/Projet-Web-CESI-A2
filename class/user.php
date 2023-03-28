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
}

