<?php
require_once('partials-front/nav.php');
?>

<?php
//Check whether the id is set or not
if (isset($_GET['category_id'])) {
    //Id is set
    $category_id = $_GET['category_id'];

    //Query to get the category details
    $query = $con->prepare("SELECT * FROM tbl_category WHERE id=$category_id");

    //Execute the query
    $query->execute();

    //Count the rows
    $count = $query->rowCount();

    //Check whether the category is available or not
    if ($count == 1) {
        //Category is available
        $row = $query->fetch();
        $category_title = $row['title'];
    } else {
        //Category is not available
        echo "<div class='error'>Category not found!</div>";
    }
} else {
    //Id is not set
    header('location:' . SITEURL);
}
?>

<!-- Pastry Search Start -->
<section class="pastry-search text-center">
    <div class="container">
        <h2>All pastries on <a href="#" class="text-white"><?php echo $category_title; ?></a></h2>
    </div>
</section>
<!-- Pastry Search End -->

<!-- Pastry Menu Start -->
<section class="pastry-menu">
    <div class="container">
        <h2 class="text-center">Pastry Menu</h2>

        <?php
        //Query to get all the pastries from database
        $query = $con->prepare("SELECT * FROM tbl_pastry WHERE active='Yes' AND category_id=$category_id");

        //Execute the query
        $query->execute();

        //Count the rows
        $count = $query->rowCount();

        //Check whether the pastry is available or not
        if ($count > 0) {
            //Pastries are available
            while ($row = $query->fetch()) {
                //Get the details of the pastry
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $image_name = $row['image_name'];
        ?>

                <div class="pastry-menu-box">
                    <div class="pastry-menu-img">
                        <?php
                        //Check whether the image is available or not
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

                        <a href="<?php echo SITEURL; ?>order.php?pastry_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                    </div>
                </div>

        <?php
            }
        } else {
            //Pastries are not available
            echo "<div class='error'>Pastry not found!</div>";
        }
        ?>
        <div class="clearfix"></div>
    </div>
</section>
<!-- Pastry Menu End -->

<?php
require_once('partials-front/footer.php');
?>