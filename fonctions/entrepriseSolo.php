<?php
class infoEntreprise {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }


    function getMark($id) {
        $stmt = $this->conn->prepare("SELECT AVG(rating) as mark FROM company JOIN review ON company.id_company = review.id_company  WHERE company.id_company = $id;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
