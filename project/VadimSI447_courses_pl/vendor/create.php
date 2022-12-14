<?php

//add new course
require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$date = $_POST['date'];


mysqli_query($connect,"INSERT INTO `products` (`id`, `title`, `price`, `description`, `date`) VALUES (NULL, '$title', '$price', '$description', '$date')");


header('Location: /VadimSI447_courses_pl');