<?php
class Postuler {
    private $conn;
    function __construct($conn) {
        $this->conn = $conn;
    }

    function addPost($id_users, $id_internship) {
        $stmt = $this->conn->prepare('INSERT INTO apply (id_users, id_internship) VALUES (:id_users, :id_internship)');
        $stmt->bindParam(':id_users', $id_users);
        $stmt->bindParam(':id_internship', $id_internship);
        $stmt->execute();
    }
}