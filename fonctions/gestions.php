<?php
class Gestion {
    private $conn;
    function __construct($conn) {
        $this->conn = $conn;
    }

    function getTuteur() {
        $stmt = $this->conn->prepare("SELECT * FROM users where statut = 'tuteur'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getStudent() {
        $stmt = $this->conn->prepare("SELECT * FROM users where statut = 'student'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function update($id, $login, $password, $image_users, $statut, $id_promotion) {
        $stmt = $this->conn->prepare("UPDATE users SET login = :login, password = :password, image_users = :image_users, statut = :statut, id_promotion = :id_promotion WHERE id = :id");
        $stmt->execute();
    }

    function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute();
    }

    function add($login, $password, $image_users, $statut, $id_promotion) {
        $stmt = $this->conn->prepare("INSERT INTO users (login, password, image_users, statut, id_promotion) VALUES (:login, :password, :image_users, :statut, :id_promotion)");
        $stmt->execute();
    }
}
