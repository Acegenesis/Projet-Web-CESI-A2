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
    function getNumber() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM company;");
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
    function getAllOffset($limit, $offset){
        $stmt = $this->conn->prepare("SELECT * FROM company LIMIT $limit OFFSET $offset;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getOne($id) {
        $stmt = $this->conn->prepare("SELECT * FROM company JOIN address ON company.id_address = address.id_address WHERE id_company = $id;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getPost($id) {
        $stmt = $this->conn->prepare("SELECT comments, login, image_users,rating  FROM company JOIN review ON company.id_company = review.id_company JOIN users ON review.id_users = users.id_users WHERE company.id_company = $id;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function addPost($id_users, $id_company, $comments, $rating) {
        $stmt = $this->conn->prepare('INSERT INTO review (id_company, id_users, comments, rating) VALUES (:id_company, :id_users, :comments, :rating)');
        $stmt->bindParam(':id_company', $id_company);
        $stmt->bindParam(':id_users', $id_users);
        $stmt->bindParam(':comments', $comments);
        $stmt->bindParam(':rating', $rating);
        $stmt->execute();
    }
}

