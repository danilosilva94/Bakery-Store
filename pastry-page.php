<?php
require_once('partials-front/nav.php');
?>

<!-- Search Start -->
<?php
require_once('partials-front/pastry-search.php');
?>
<!-- Search End -->

<!-- Pastries Menu Start -->
<section class="pastry-menu-pastry-page">
    <div class="container-pastry-page">
        <?php
            //Get search term and remove unnecessary characters
            $pastry_id = ($_GET['pastry_id']);
        ?>

        <?php
            //Query
            $query = $con->prepare("SELECT * FROM tbl_pastry WHERE id = :pastry_id");

            //Bind the values and sanitize the input
            $query->bindValue(':pastry_id', $pastry_id, PDO::PARAM_STR);

            //Execute the query
            $query->execute();

            //Count the rows
            $count = $query->rowCount();

            //Check whether the food is available or not
            //Check whether the pastry is available or not
            if($count > 0){
                //Itearte through the pastries with while loop
                while($row = $query->fetch()){
                    //Get details
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];

                    ?>
                    <div class="pastry-menu-box-pastry-page">
                        <div class="pastry-menu-img-pastry-page">
                            <?php
                                //Check if image is available or not
                                if($image_name == ""){
                                    //Display the message
                                    echo "<div class='error-pastry-page'>Image not available!</div>";
                                } else {
                                    //Display the image
                                    ?>
                                    <img src="<?php echo SITEURL; ?>assets/images/pastries/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="img-responsive-img-curved-pastry-page">
                                    <?php
                                }
                            ?>
                        </div>
                        
                        <div class="pastry-menu-desc-pastry-page">
                            <h4><?php echo $title; ?></h4>
                            <p class="pastry-price-pastry-page">€<?php echo $price; ?></p>
                            <p class="pastry-detail-pastry-page">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?pastry_id=<?php echo $id; ?>" class="btn-pastry-page btn-primary-pastry-page">Order Now!</a>
                        </div>

                        <dv class="clearfix"></dv>
                    </div>
                    <?php
                }
            } else{
                //Display the message
                echo "<div class='error-pastry-page'>No Pastries Available!</div>";
            }
        ?>
    </div>
    <div class="clearfix"></div>
</section>
<!-- Pastries Menu End -->

<?php
require_once('partials-front/footer.php');
?>
