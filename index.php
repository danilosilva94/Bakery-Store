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

        <a href="#">
            <div class="box-3 float-container">
                <img src="" alt="">
                <h3 class="float-text text-white category-hover">Category</h3>
            </div>
        </a>

        <a href="#">
            <div class="box-3 float-container">
                <img src="" alt="">
                <h3 class="float-text text-white category-hover">Category</h3>
            </div>
        </a>

        <a href="#">
            <div class="box-3 float-container">
                <img src="" alt="">
                <h3 class="float-text text-white category-hover">Category</h3>
            </div>
        </a>

        <a href="#">
            <div class="box-3 float-container">
                <img src="" alt="">
                <h3 class="float-text text-white category-hover">Category</h3>
            </div>
        </a>
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