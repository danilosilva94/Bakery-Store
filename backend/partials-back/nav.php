<?php
    include ('../config/config.php');
    include ('login-check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clohda's Cakes Admin Panel</title>
    
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <!-- Navbar Start -->
    <div class="menu text-center">
        <div class="wrapper">
        <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="manage-admin.php">Admin</a>
                    </li>
                    <li>
                        <a href="manage-category.php">Category</a>
                    </li>
                    <li>
                        <a href="manage-food.php">Pastry</a>
                    </li>
                    <li>
                        <a href="manage-order.php">Order</a>
                    </li>
                    <li>
                        <a href="../index.php">Store</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
        </div>
    </div>
    <!-- Navbar End -->