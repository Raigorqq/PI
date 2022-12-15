<?php

require_once '../config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
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

            $findID = $_POST['result_id'];
            $products = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$findID'");
            $products = mysqli_fetch_all($products);


            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[2] ?>$</td>
                        <td><?= $product[4] ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <form action="/VadimSI447_courses_pl" method="post">
    <button type="submit">Return</button>
    </form>
    </center>
</body>
</html>