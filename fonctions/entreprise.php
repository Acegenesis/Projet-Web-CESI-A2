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
}

