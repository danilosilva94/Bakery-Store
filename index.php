<?php
    //Required php files
    require_once('partials-front/nav.php');
?>

<!-- Search Start -->
<section class="pastry-search text-center">
    <div class="container">
        <form action="<?php echo SITEURL; ?>pastry-search.php" method="POST">
            <input type="search" name="search" placeholder="Search for Pastries...">
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>
    </div>
</section>
<!-- Search End -->