<?php
include 'bdd.php';
include '../class/stage.php';
$stage = new Stage($conn);
$num = $_POST['num'];
$name = $_POST['name'];
$description = $_POST['description'];
$places = $_POST['places'];
$duree = $_POST['duree'];
$argent = $_POST['argent'];
$start = $_POST['start'];
$surname = $_POST['surname'];
$stage->updateStage($num, $name, $description, $places, $duree, $argent, $start, $surname);