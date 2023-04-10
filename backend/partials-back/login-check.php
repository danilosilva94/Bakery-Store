<?php
    //Check if user is logged in
    if (!isset($_SESSION['user'])) {
        //Add error message
        $_SESSION['no_login_message'] = "<div class='error text-center'>Please Login to Access Admin Panel!</div>";
        //Redirect to login page
        header('location:'.SITEURL.'backend/login.php');
    }
?>