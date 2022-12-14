<?php

    require_once 'config/connect.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Course</title>
</head>
<body>
    <h3>Update Course</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Title</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Description</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $product['price'] ?>">
        <p>Date</p>
        <input type="text" name="date" value="<?= $product['date'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>