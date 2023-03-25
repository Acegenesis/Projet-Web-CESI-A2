<?php
class avis {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function getAll($page) {
        $stmt = $this->conn->prepare("SELECT * FROM review JOIN users ON review.id_users = users.id_users JOIN company ON review.id_company = company.id_company WHERE name_company = '$page';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
   
}
