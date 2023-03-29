<?php
class User {
    private $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function getOne ($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id_users = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getUser($id) {
        $sql = "SELECT login, image_users, status FROM users WHERE id_users = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getAdress($id) {
        $sql = "SELECT name_promotion, name_campus, address, country, city FROM users JOIN promotion ON users.id_promotion = promotion.id_promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address WHERE id_users = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    function getPromotion() {
        $stmt = $this->conn->prepare("SELECT id_promotion, name_promotion FROM promotion GROUP BY name_promotion");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getCampus() {
        $stmt = $this->conn->prepare("SELECT id_campus, name_campus FROM campus");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getTuteur() {
        $stmt = $this->conn->prepare("SELECT name_promotion, name_campus, login, id_users FROM users JOIN promotion ON users.id_promotion = promotion.id_promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address where status = 'tuteur';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getEleve() {
        $stmt = $this->conn->prepare("SELECT name_promotion, name_campus, login, id_users FROM users JOIN promotion ON users.id_promotion = promotion.id_promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address where status = 'eleve';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getStage() {
        $stmt = $this->conn->prepare("SELECT name_promotion, name_campus, login, id_users FROM users JOIN promotion ON users.id_promotion = promotion.id_promotion JOIN campus ON promotion.id_campus = campus.id_campus JOIN address ON campus.id_address = address.id_address where status = 'eleve';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }  

    function updateTuteur($id_users, $login, $campus, $promotion) {
        $stmt = $this->conn->prepare("SELECT id_campus FROM campus WHERE name_campus = :campus");
        $stmt->bindParam(':campus', $campus);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $campus = $result['id_campus'];
        $stmt = $this->conn->prepare("INSERT INTO promotion (name_promotion, id_campus) SELECT :promotion, :campus FROM DUAL WHERE NOT EXISTS (SELECT * FROM promotion WHERE name_promotion = :promotion AND id_campus = :campus)");
        $stmt->bindParam(':promotion', $promotion);
        $stmt->bindParam(':campus', $campus);
        $stmt->execute();
        $stmt = $this->conn->prepare("UPDATE users SET login = :login, id_promotion = (SELECT id_promotion FROM promotion WHERE name_promotion = :promotion AND id_campus = :campus) WHERE id_users = :id_users;");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':promotion', $promotion);
        $stmt->bindParam(':campus', $campus);
        $stmt->bindParam(':id_users', $id_users);
        $stmt->execute();
    }

    function updateEleve($id_users, $login, $id_promotion) {
        $stmt = $this->conn->prepare("UPDATE users SET login = :login, id_promotion = :id_promotion WHERE id_users = :id_users;");
        $stmt->execute();
    }

    function deleteTuteur($id_users) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id_users = :id_users");
        $stmt->bindParam(':id_users', $id_users);
        $stmt->execute();
    }

    function deleteEleve($id_users) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id_users = :id_users");
        $stmt->execute();
    }

    function addTutor($login, $password, $promotion, $campus) {
        if ($login == "" || $password == "" || $promotion == "" ) {
            echo "remplissez tous les champs svp";
        }
        else{
            $stmt = $this->conn->prepare("SELECT login FROM users WHERE login = :login");
            $stmt->bindParam(':login', $login);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$result) {
                $stmt = $this->conn->prepare("INSERT INTO promotion (name_promotion, id_campus) SELECT :promotion, :campus FROM DUAL WHERE NOT EXISTS (SELECT * FROM promotion WHERE name_promotion = :promotion AND id_campus = :campus)");
                $stmt->bindParam(':promotion', $promotion);
                $stmt->bindParam(':campus', $campus);
                $stmt->execute();

                $stmt = $this->conn->prepare("SELECT id_promotion FROM promotion WHERE name_promotion = :promotion AND id_campus = :campus");
                $stmt->bindParam(':promotion', $promotion);
                $stmt->bindParam(':campus', $campus);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $promotion = $result['id_promotion'];

                $stmt = $this->conn->prepare("INSERT INTO users (login, password,status, id_promotion) VALUES (:login, :password, 'Tuteur', :id_promotion)");
                $stmt->bindParam(':login', $login);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':id_promotion', $promotion);
                $stmt->execute();
            }
            else {
                echo "login déjà utilisé";
            }


        }
    }
    function addEleve($login, $password, $promotion, $campus) {
        if ($login == "" || $password == "" || $promotion == "" ) {
            echo "remplissez tous les champs svp";
        }
        else{
            $stmt = $this->conn->prepare("SELECT login FROM users WHERE login = :login");
            $stmt->bindParam(':login', $login);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$result) {
                $stmt = $this->conn->prepare("INSERT INTO promotion (name_promotion, id_campus) SELECT :promotion, :campus FROM DUAL WHERE NOT EXISTS (SELECT * FROM promotion WHERE name_promotion = :promotion AND id_campus = :campus)");
                $stmt->bindParam(':promotion', $promotion);
                $stmt->bindParam(':campus', $campus);
                $stmt->execute();

                $stmt = $this->conn->prepare("SELECT id_promotion FROM promotion WHERE name_promotion = :promotion AND id_campus = :campus");
                $stmt->bindParam(':promotion', $promotion);
                $stmt->bindParam(':campus', $campus);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $promotion = $result['id_promotion'];

                $stmt = $this->conn->prepare("INSERT INTO users (login, password,status, id_promotion) VALUES (:login, :password, 'eleve', :id_promotion)");
                $stmt->bindParam(':login', $login);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':id_promotion', $promotion);
                $stmt->execute();
            }
            else {
                echo "login déjà utilisé";
            }

        }
    }

}


