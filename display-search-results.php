<?php
require_once('partials-front/nav.php');
?>

<!-- Search Start -->
<?php
require_once('partials-front/pastry-search.php');
?>
<!-- Search End -->

<!-- Pastries Menu Start -->
<section class="pastry-menu">
    <div class="container">
        <?php
        //Get search term and remove unnecessary characters
        $search = ($_POST['search']);
        ?>
        <h2 class="text-center">Pastries on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        <?php
        //Query
        $sql = "SELECT * FROM tbl_pastry 
            WHERE title LIKE CONCAT('%', :search, '%')
            OR description LIKE CONCAT('%', :search, '%')";

        //Prepare the query
        $query = $con->prepare($sql);

        //Bind the values and sanitize the input
        $query->bindValue(':search', $search, PDO::PARAM_STR);

        //Execute the query
        $query->execute();

        //Count the rows
        $count = $query->rowCount();

        //Check whether the food is available or not
        //Check whether the pastry is available or not
        if ($count > 0) {
            //Itearte through the pastries with while loop
            while ($row = $query->fetch()) {
                //Get details
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $image_name = $row['image_name'];

        ?>
                <div class="pastry-menu-box">
                    <div class="pastry-menu-img">
                        <?php
                        //Check if image is available or not
                        if ($image_name == "") {
                            //Display the message
                            echo "<div class='error'>Image not available!</div>";
                        } else {
                            //Display the image
                        ?>
                            <a href="<?php echo SITEURL; ?>pastry-page.php?pastry_id=<?php echo $id; ?>">
                                <img src="<?php echo SITEURL; ?>assets/images/pastries/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="img-responsive img-curved">
                            </a>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="pastry-menu-desc">
                        <a href="<?php echo SITEURL; ?>pastry-page.php?pastry_id=<?php echo $id; ?>">
                            <h4><?php echo $title; ?></h4>
                            <p class="pastry-price">€<?php echo $price; ?></p>
                            <p class="pastry-detail">
                                <?php echo $description; ?>
                            </p>
                        </a>
                        <br>

                        <a href="<?php echo SITEURL; ?>order.php?pastry_id=<?php echo $id; ?>" class="btn btn-primary">Order Now!</a>
                    </div>

                    <dv class="clearfix"></dv>
                </div>
        <?php
            }
        } else {
            //Display the message
            echo "<div class='error'>No Pastries Available!</div>";
        }
        ?>
    </div>
    <div class="clearfix"></div>
</section>
<!-- Pastries Menu End -->

<?php
require_once('partials-front/footer.php');
?>