<?php
include '../components/header.php';
if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = hash('sha256', $_POST['password']);
    
    $rq = $conn->prepare("SELECT login, password, id_users FROM users WHERE login = :user AND password = :password");
    $rq->bindParam(':user', $user);
    $rq->bindParam(':password', $password);
    $rq->execute();
    $rq->setFetchMode(PDO::FETCH_ASSOC);

    if ($rq->rowCount() === 1) {
        $data = $rq->fetch();
        setcookie("user", $data["login"], time() + 3600, '/');
        setcookie("id", $data["id_users"], time() + 3600, '/');
        header('Location: /');
    }
    else {
        header('Location: /');
    }
} 
include '../components/footer.php';
?>  