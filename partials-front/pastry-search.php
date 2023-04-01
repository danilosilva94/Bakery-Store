<!--Food Search Start-->
<section class="pastry-search text-center">
    <div class="container">

        <form action="<?php echo SITEURL; ?>display-search-results.php" method="POST">
            <input type="search" class="search" name="search" placeholder="Search for Treats...">
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>
        <div class="search-results"></div>
    </div>

    <!-- Script for Search -->
    <script>
        $(document).ready(function() {
            $('.search-results').hide();
        });

        $(function() {
            //Variables
            var timer;

            //Do something when the user types in the search bar
            $(".search").keyup(function() {
                //Clear timer
                clearTimeout(timer);

                //Show loading message
                $(".search-results").html("<p class='success'>Loading...</p>");

                //Set timer and wait 500ms before executing the function
                timer = setTimeout(function() {
                    //Get the value from the input field
                    var val = $(".search").val();

                    //Check if value is empty
                    if (val != "") {
                        //Send ajax request
                        $.post("ajax/get-search-results.php", {
                                term: val
                            },
                            function(data) {
                                //Display the results
                                $(".search-results").show();
                                $(".search-results").html(data);
                            })
                    } else {
                        //Clear the results
                        $(".search-results").html("");
                        $(".search-results").hide();
                    }
                }, 100)
            })
        })
    </script>
</section>
<!--Food Search End-->