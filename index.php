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

<!-- Categories Start -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Pastries</h2>

        <?php
            //Sql query to get all the categories from database
            $query = $con->prepare("SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3");

            //Execute the query
            $query->execute();

            //Count the rows
            $count = $query->rowCount();

            //Check whether the category is available or not
            if($count > 0){
                //Itearte through the categories with while loop
                while($row = $query->fetch()){
                    //get details of the category
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];

                    ?>
                <a href="<?php echo SITEURL; ?>category-pastries.php?category_id=<?php echo $id; ?>">
                    <div class="box-3 float-container">
                        <?php
                            //Check whether the image is available or not
                            if($image_name == ""){
                                //Display the message
                                echo "<div class='error'>Image not available!</div>";
                            } else {
                                //Display the image
                                ?>
                                <img src="<?php echo SITEURL; ?>assets/images/category/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" class="img-responsive img-curved">
                                <?php
                            }
                        ?>

                        <h3 class="float-text category-hover"><?php echo $title; ?></h3>
                    </div>
                </a>
                <?php
                }
            } else{
                //Display the message
                echo "<div class='error'>No Categories Available!</div>";
            }
        ?>
        <!-- Prevents overlapping -->
        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories End -->

<!-- Pastry Menu Start -->
<section class="pastry-menu">
    <div class="container">
        <h2 class="text-center text-white">Pastry Menu</h2>

        <div class="pastry-menu-box">
            <div class="pastry-menu-img">
                <img src="" alt="">
            </div>

            <div class="pastry-menu-desc">
                <h4>Title</h4>
                <p class="pastry-price">£</p>
                <p class="pastry-detail">
                    Description
                </p>
                <br>

                <a href="">Pastry Link</a>
            </div>
            <!-- Prevents overlapping -->
            <div class="clearfix"></div>
        </div>

        <div class="pastry-menu-box">
            <div class="pastry-menu-img">
                <img src="" alt="">
            </div>

            <div class="pastry-menu-desc">
                <h4>Title</h4>
                <p class="pastry-price">£</p>
                <p class="pastry-detail">
                    Description
                </p>
                <br>

                <a href="">Pastry Link</a>
            </div>
            <!-- Prevents overlapping -->
            <div class="clearfix"></div>
        </div>

        <div class="pastry-menu-box">
            <div class="pastry-menu-img">
                <img src="" alt="">
            </div>

            <div class="pastry-menu-desc">
                <h4>Title</h4>
                <p class="pastry-price">£</p>
                <p class="pastry-detail">
                    Description
                </p>
                <br>

                <a href="">Pastry Link</a>
            </div>
            <!-- Prevents overlapping -->
            <div class="clearfix"></div>
        </div>

        <div class="pastry-menu-box">
            <div class="pastry-menu-img">
                <img src="" alt="">
            </div>

            <div class="pastry-menu-desc">
                <h4>Title</h4>
                <p class="pastry-price">£</p>
                <p class="pastry-detail">
                    Description
                </p>
                <br>

                <a href="">Pastry Link</a>
            </div>
            <!-- Prevents overlapping -->
            <div class="clearfix"></div>
        </div>

        <div class="pastry-menu-box">
            <div class="pastry-menu-img">
                <img src="" alt="">
            </div>

            <div class="pastry-menu-desc">
                <h4>Title</h4>
                <p class="pastry-price">£</p>
                <p class="pastry-detail">
                    Description
                </p>
                <br>

                <a href="">Pastry Link</a>
            </div>
            <!-- Prevents overlapping -->
            <div class="clearfix"></div>
        </div>

        <div class="pastry-menu-box">
            <div class="pastry-menu-img">
                <img src="" alt="">
            </div>

            <div class="pastry-menu-desc">
                <h4>Title</h4>
                <p class="pastry-price">£</p>
                <p class="pastry-detail">
                    Description
                </p>
                <br>

                <a href="">Pastry Link</a>
            </div>
            <!-- Prevents overlapping -->
            <div class="clearfix"></div>
        </div>
        <!-- Prevents overlapping -->
        <div class="clearfix"></div>
    </div>

    <h3 class="text-center">
        <a href="<?php echo SITEURL; ?>pastries.php">See All Pastries</a>
    </h3>
</section>
<!-- Pastry Menu End -->

<!-- Footer Start -->
<?php
//Required php files
require_once('partials-front/footer.php');
?>
<!-- Footer End -->