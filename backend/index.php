<?php
include('partials-back/nav.php');
?>

<!-- Main content start -->
<div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br>
        <br>

        <?php
        // Check whether the session is set or not
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>

        <div class="col-4 text-center">
            <?php
            //Query to get all categories
            $sql = "SELECT * FROM tbl_category";

            //Prepare the query
            $query = $con->prepare($sql);

            //Execute the query
            $query->execute();

            //Count the rows
            $count = $query->rowCount();
            ?>
            <h1><?php echo $count; ?></h1>
            <br>
            <a href="<?php echo SITEURL; ?>admin/manage-category.php"><b>Categories</b></a>
        </div>

        <div class="col-4 text-center">
            <?php
            //Query to get all pastries
            $sql = "SELECT * FROM tbl_pastry";

            //Prepare the query
            $query = $con->prepare($sql);

            //Execute the query
            $query->execute();

            //Count the rows
            $count = $query->rowCount();
            ?>
            <h1><?php echo $count; ?></h1>
            <br>
            <a href="<?php echo SITEURL; ?>admin/manage-pastry.php"><b>Pastries</b></a>
        </div>

        <div class="col-4 text-center">
            <?php
            //Query to get all orders
            $sql = "SELECT * FROM tbl_order";

            //Prepare the query
            $query = $con->prepare($sql);

            //Execute the query
            $query->execute();

            //Count the rows
            $count = $query->rowCount();
            ?>
            <h1><?php echo $count; ?></h1>
            <br>
            <a href="<?php echo SITEURL; ?>admin/manage-order.php"><b>Orders</b></a>
        </div>

        <div class="col-4 text-center">
            <?php
            //Query to get all orders that are delivered
            $sql = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

            //Prepare the query
            $query = $con->prepare($sql);

            //Execute the query
            $query->execute();

            // Get details
            $row = $query->fetch();

            //Get the total
            $total = $row['Total'];
            ?>
            <h1>€<?php echo $total; ?></h1>
            <br>
            <a href="<?php echo SITEURL; ?>admin/manage-order.php"><b>Sales</b></a>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Main content end -->
<?php
include('partials-back/footer.php');
?>