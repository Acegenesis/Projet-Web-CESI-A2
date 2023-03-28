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
    function addadress($adresse,$country,$ville) {
        if ($adresse == "" || $country == "" || $ville == "" ) {
        echo "remplissez tous les champs svp";
        }
        else{
        $stmt = $this->conn->prepare("INSERT INTO address (address,country,city) VALUES (:adresse,:country,:id_promotion)");
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':id_promotion', $ville);

        $stmt->execute();
    }
    }

    function getLastAdress() {
        $stmt = $this->conn->prepare("SELECT id_address FROM address ORDER BY id_address DESC LIMIT 1;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function addCompany($nom, $description,$accStagiaires,$activity,$mail,$idAdress) {
        if ($nom == "" || $description == "" || $accStagiaires == "" || $activity == ""|| $mail == ""|| $idAdress == "" ) {
        echo "remplissez tous les champs svp";
        }
        else{
        $stmt = $this->conn->prepare("INSERT INTO company  (description_company,accepted,name_company,activity,mail,id_address)VALUES (:description,:accStagiaires,:nom,:activity,:mail,:idAdress)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':accStagiaires', $accStagiaires);
        $stmt->bindParam(':activity', $activity);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':idAdress', $idAdress);


        $stmt->execute();
    }
    }
}

