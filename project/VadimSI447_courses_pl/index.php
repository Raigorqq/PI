<?php

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Courses_PL</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #72a4d6;
        color: black;
    }

    td {
        background: #82d2fa;
    }

    .card {
        width: 32%;
        margin-left: 1%;
        margin-top: 1%;
    }


</style>
<body>
    <hr>
    <center>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Date</th>
            </tr>

            <?php


                $products = mysqli_query($connect, "SELECT * FROM `products`");
                $products = mysqli_fetch_all($products);


                foreach ($products as $product) {
                    ?>
                        <tr>
                            <td><?= $product[0] ?></td>
                            <td><?= $product[1] ?></td>
                            <td><?= $product[3] ?></td>
                            <td><?= $product[2] ?>$</td>
                            <td><?= $product[4] ?></td>
                            <td><a href="product.php?id=<?= $product[0] ?>">View</a></td>
                            <td><a href="update.php?id=<?= $product[0] ?>">Update</a></td>
                            <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a></td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    </center>
    

    <div class="container">
        <div class="d-flex flex-wrap">

            <!-- Add -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h3 class="my-0 font-weight-normal">Add new course</h3>
                </div>
                <div class="card-body">
                <form action="vendor/create.php" method="post">
                    <p>Title</p>
                    <input type="text" name="title">
                    <p>Description</p>
                    <textarea name="description"></textarea>
                    <p>Price</p>
                    <input type="number" name="price">
                    <p>Date</p>
                    <input type="date" name="date" value="yy-mm-dd"> <br> <br>
                    <button type="submit">Add new course</button>
                </form>
                </div>
            </div>

            <!-- find by ID -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h3 class="my-0 font-weight-normal">Find By ID</h3>
                </div>
                <div class="card-body">
                <form action="vendor/findByID.php" method="post">
                    <input type="number" name="result_id" value="<?$product['id']?>">
                    <button type="submit">Find</button>
                </form>
                </div>
            </div>

            <!-- find by Date -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h3 class="my-0 font-weight-normal">Find By Date</h3>
                </div>
                <div class="card-body">
                <form action="vendor/findByDate.php" method="post">
                    <input type="date" name="result_date" value="yy-mm-dd">
                    <button type="submit">Find</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

