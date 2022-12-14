<?php


require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$date = $_POST['date'];


mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description', `date` = '$date' WHERE `products`.`id` = '$id'");

header('Location: /VadimSI447_courses_pl');