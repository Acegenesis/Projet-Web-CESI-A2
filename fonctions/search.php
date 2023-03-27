<?php
class search {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function get_stages($terme) {
        $stmt = $this->conn->prepare("SELECT * FROM internship JOIN company ON internship.id_company = company.id_company WHERE title_internship LIKE '%$terme%';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function get_entreprises($terme) {
        $stmt = $this->conn->prepare("SELECT * FROM company WHERE name_company LIKE '%$terme%';");
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

    function getMark($id) {
        $stmt = $this->conn->prepare("SELECT AVG(rating) as mark FROM company JOIN review ON company.id_company = review.id_company  WHERE company.id_company = $id;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}