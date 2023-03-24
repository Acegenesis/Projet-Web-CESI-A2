<?php

class Stage {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM internship JOIN company ON internship.id_company = company.id_company LEFT JOIN requires ON internship.id_internship = requires.id_internship GROUP BY internship.id_internship;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getNumber() {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM internship;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getAllOffset($limit, $offset){
        $stmt = $this->conn->prepare("SELECT * FROM internship JOIN company ON internship.id_company = company.id_company JOIN requires ON internship.id_internship = requires.id_internship GROUP BY internship.id_internship LIMIT $limit OFFSET $offset;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getSkills($id) {
        $stmt = $this->conn->prepare("SELECT name_skill FROM internship JOIN requires ON internship.id_internship = requires.id_internship LEFT JOIN skills ON requires.id_skill = skills.id_skill WHERE internship.id_internship = $id;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

