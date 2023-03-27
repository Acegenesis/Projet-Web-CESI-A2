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

    function getForEnterprise($id) {
        $stmt = $this->conn->prepare("SELECT * FROM internship JOIN company ON internship.id_company = company.id_company LEFT JOIN requires ON internship.id_internship = requires.id_internship WHERE company.id_company = $id GROUP BY internship.id_internship;");
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

    function getOne($id) {
        $stmt = $this->conn->prepare("SELECT * FROM internship JOIN company ON internship.id_company = company.id_company LEFT JOIN requires ON internship.id_internship = requires.id_internship WHERE internship.id_internship = $id;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function getAllFav($id) {
        $stmt = $this->conn->prepare("SELECT internship.id_internship, title_internship, image_internship, description_internship, places, name_company  FROM wishlist JOIN internship ON wishlist.id_internship = internship.id_internship JOIN company ON internship.id_company = company.id_company JOIN requires ON internship.id_internship = requires.id_internship WHERE id_users = :id GROUP BY internship.id_internship;");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getFav($id_internship, $id_users) {
        $stmt = $this->conn->prepare("SELECT * FROM wishlist WHERE id_internship = :id_internship AND id_users = :id_users;");
        $stmt->bindParam(':id_internship', $id_internship);
        $stmt->bindParam(':id_users', $id_users);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function addFav($id_internship, $id_users) {
        $stmt = $this->conn->prepare("INSERT INTO wishlist (id_internship, id_users) VALUES (:id_internship, :id_users);");
        $stmt->bindParam(':id_internship', $id_internship);
        $stmt->bindParam(':id_users', $id_users);
        $stmt->execute();
    }

    function delFav($id_internship, $id_users) {
        $stmt = $this->conn->prepare("DELETE FROM wishlist WHERE id_internship = :id_internship AND id_users = :id_users;");
        $stmt->bindParam(':id_internship', $id_internship);
        $stmt->bindParam(':id_users', $id_users);
        $stmt->execute();
    }
    function add_stage($nom,$description,$rémunération,$durée,$Places,$Date,) {
        $stmt = $this->conn->prepare("INSERT INTO wishlist (id_internship, id_users) VALUES (:id_internship, :id_users);");
        $stmt->bindParam(':id_internship', $id_internship);
        $stmt->bindParam(':id_users', $id_users);
        $stmt->execute();
    }
}

