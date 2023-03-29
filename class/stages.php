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
        $stmt = $this->conn->prepare("SELECT title_internship, description_internship, name_company, internship.id_internship FROM internship JOIN company ON internship.id_company = company.id_company LEFT JOIN requires ON internship.id_internship = requires.id_internship WHERE company.id_company = $id GROUP BY internship.id_internship;");
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
        $stmt = $this->conn->prepare("SELECT internship.id_internship, internship.title_internship, internship.image_internship, internship.description_internship, internship.places, internship.duration, internship.remuneration, internship.post, internship.start, company.id_company, company.description_company, company.accepted, company.name_company FROM internship LEFT JOIN company ON internship.id_company = company.id_company LEFT JOIN requires ON internship.id_internship = requires.id_internship GROUP BY internship.id_internship LIMIT :limit OFFSET :offset;");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getSkills($id) {
        $stmt = $this->conn->prepare("SELECT name_skill FROM internship JOIN requires ON internship.id_internship = requires.id_internship JOIN skills ON requires.id_skill = skills.id_skill WHERE internship.id_internship = $id;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getAllSkills() {
        $stmt = $this->conn->prepare("SELECT * FROM skills;");
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

    function getLastStage() {
        $stmt = $this->conn->prepare("SELECT id_internship FROM internship ORDER BY id_internship DESC LIMIT 1;");
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
        $stmt->execute() ;
    }
    function addStage($nom,$description,$places,$duree,$remuneration,$date_post,$date_stage,$entreprise) {
        if ($nom == "" || $description == "" || $places == "" || $duree == "" || $remuneration == "" || $date_post == "" || $date_stage == "" || $entreprise == "") {
            echo "erreur";
            return;
        } else {
            $stmt = $this->conn->prepare("INSERT INTO internship (title_internship,description_internship,places,duration,remuneration,post,start,id_company) VALUES (:nom,:description,:places,:duree,:remuneration,:date_post,:date_stage,:entreprise)");
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':places', $places);
            $stmt->bindParam(':duree', $duree);
            $stmt->bindParam(':remuneration', $remuneration);
            $stmt->bindParam(':date_post', $date_post);
            $stmt->bindParam(':date_stage', $date_stage);
            $stmt->bindParam(':entreprise', $entreprise);
            $stmt->execute();
        }

    }

    function addCompetences($idStage,$id_competence) {
        if ($idStage == "" || $id_competence == "") {
            echo "erreur";
            return;
        } else {
            $stmt = $this->conn->prepare("INSERT INTO requires VALUES (:idStage,:id_competence);");
            $stmt->bindParam(':idStage', $idStage);
            $stmt->bindParam(':id_competence', $id_competence);
            
            $stmt->execute();
        }

    }

    function getPost($id_users, $id_internship) {
        $stmt = $this->conn->prepare('SELECT * FROM apply WHERE id_users = :id_users AND id_internship = :id_internship');
        $stmt->bindParam(':id_users', $id_users);
        $stmt->bindParam(':id_internship', $id_internship);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function addPost($id_users, $id_internship) {
        $stmt = $this->conn->prepare('INSERT INTO apply (id_users, id_internship) VALUES (:id_users, :id_internship)');
        $stmt->bindParam(':id_users', $id_users);
        $stmt->bindParam(':id_internship', $id_internship);
        $stmt->execute();
    }

    function delPost($id_users, $id_internship) {
        $stmt = $this->conn->prepare('DELETE FROM apply WHERE id_users = :id_users AND id_internship = :id_internship');
        $stmt->bindParam(':id_users', $id_users);
        $stmt->bindParam(':id_internship', $id_internship);
        $stmt->execute();
    }

    function updateStage($id,$name,$description,$places,$duree,$remuneration,$date_stage,$entreprise) {
        $stmt = $this->conn->prepare("UPDATE internship SET title_internship = :nom, description_internship = :description, places = :places, duration = :duree, remuneration = :remuneration, start = :date_stage, id_company = :entreprise WHERE id_internship = :id;");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':places', $places);
        $stmt->bindParam(':duree', $duree);
        $stmt->bindParam(':remuneration', $remuneration);
        $stmt->bindParam(':date_stage', $date_stage);
        $stmt->bindParam(':entreprise', $entreprise);
        $stmt->execute();
    }
}

