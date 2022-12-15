<?php

//view
    require_once 'config/connect.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Course</title>
</head>
<body style="margin-top: 10%;">
    <center>
    <h2>Title: <?= $product['title'] ?></h2>
    <h4>Price: <?= $product['price'] ?></h4>
    <p>Description: <?= $product['description'] ?></p>
    <p>Date: <?= $product['date'] ?></p>
    <form action="/VadimSI447_courses_pl" method="post">
    <button type="submit">Return</button>
    </form>
    </center>
</body>
</html>