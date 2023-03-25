<?php
require_once('../config/config.php');
?>

<?php
//Check if the variables are passed
if (isset($_POST['term'])) {
    //Get the value from the input field
    $searchTerm = $_POST['term'];

    //Query to get the food based on the search term
    $query = $con->prepare("SELECT * FROM tbl_pastry WHERE title LIKE '%$searchTerm%'");

    //Execute the query
    $query->execute();

    //Count the rows
    $count = $query->rowCount();

    //Check if the rows are greater than 0
    if ($count > 0) {
        $returnResult = "";

        //Iterate through the rows
        while ($row = $query->fetch()) {
            //Get the details of the food
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $image_name = $row['image_name'];
            
            //Add the food to the result
            $returnResult .= "<a href='".SITEURL."pastry-page.php?pastry_id=".$id."'>
                "."<div class='search-result-item'>
                    "."<img src='".SITEURL."assets/images/pastries/".$image_name."' alt='".$title."' class='search-result-item-img img-curved'>"."
                    "."<p class='search-result-item-title'>".$title."</p>"."
                    "."<p class='search-result-item-price'>€".$price."</p>"."    
                </div>"."
            </a><hr>";
        }

        //Display the result
        echo $returnResult;
    } else{
        //No food available
        echo "<div class='error'>Pastry not found!</div>";
    }
}
?>