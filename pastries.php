<?php
    require_once('partials-front/nav.php');
?>

<!-- Pastry Search Start -->
<section class="pastry-search text-center">
    <div class="container">
        <form action="<?php echo SITEURL; ?>pastry-search.php" method="POST">
            <input type="search" name="search" placeholder="Search for Pastries..." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>
    </div>
</section>
<!-- Pastry Search End -->

<!-- Pastry Menu Start -->
<section class="pastry-menu">
    <div class="container">
        <h2 class="text-center">Pastry Menu</h2>

        <?php
            //Query to get all pastries from database
            $query = $con->prepare("SELECT * FROM tbl_pastry WHERE active='Yes' ORDER BY title");

            //Execute the query
            $query->execute();

            //Count the rows
            $count = $query->rowCount();

            //Check whether the pastry is available or not
            if($count > 0){
                //Pastries available
                while($row = $query->fetch()){
                    //Get details of the pastry
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="pastry-menu-box">
                        <div class="pastry-menu-img">
                            <?php
                                //Check whether the image is available or not
                                if($image_name == ""){
                                    //Display the message
                                    echo "<div class='error'>Image not available!</div>";
                                } else {
                                    //Display the image
                                    ?>
                                    <img src="<?php echo SITEURL; ?>assets/images/pastries/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="img-responsive img-curved">
                                    <?php
                                }
                            ?>
                        </div>

                        <div class="pastry-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="pastry-price">$<?php echo $price; ?></p>
                            <p class="pastry-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?pastry_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <?php
                }
            } else{
                //No pastries available
                echo "<div class='error'>No Pastries Available!</div>";
            }
        ?>
        <div class="clearfix"></div>
    </div>
</section>
<!-- Pastry Menu End -->

<?php
    require_once('partials-front/footer.php');
?>