<?php
    //Required php files
    require_once('config/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- This is for IE compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clohda's Cakes</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar Start -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/logo/logo.png" alt="Clohda's Cakes" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>pastries.php">Pastries</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- Prevents the menu from overlapping the search bar -->
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar End -->