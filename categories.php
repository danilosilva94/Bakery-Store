<?php
    require_once('partials-front/nav.php');
?>

<!-- Categories Section Start -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Categories</h2>

        <?php
            //Query to get all the categories from database
            $query = $con->prepare("SELECT * FROM tbl_category WHERE active='Yes'");

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
                    <h3 class="float-text text-white category-hover"><?php echo $title; ?></h3>
                </div>
                </a>
                <?php
                }
            } else{
                //No categories available
                echo "<div class='error'>No Categories Available!</div>";
            }
        ?>
        <!-- Prevents overlapping -->
        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section End -->
<?php
    require_once('partials-front/footer.php');
?>