<?php
    include ('../config/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clohda's Cakes - Login</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Login</h1>

        <?php
            // Check whether the session is set or not
            if(isset($_SESSION['login']))
            {
                // Session is set
                echo $_SESSION['login'];
                // Remove session message
                unset($_SESSION['login']);
            }

            // Check whether the session is set or not
            if(isset($_SESSION['no-login-message']))
            {
                // Session is set
                echo $_SESSION['no-login-message'];
                // Remove session message
                unset($_SESSION['no-login-message']);
            }
        ?>
        <br>
        <br>

        <!-- Login Form Starts Here -->
        <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
        </form>
        <!-- Login Form Ends Here -->
    </div>
</body>
</html>

<?php
    // Check whether the submit button is clicked or not
    if(isset($_POST['submit'])){
        // Get the data from login form
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // SQL query to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username=:username AND password=:password";

        //Prepare the query
        $query = $con->prepare($sql);

        //Bind the parameters
        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);

        //Execute the query
        $query->execute();

        //Count rows to check whether the user exists or not
        $count = $query->rowCount();

        //Login the user if count is 1
        if($count == 1){
            //User available and login success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";

            //Create User Object Variable
            $_SESSION['user'] = $username;

            //Redirect to Home Page
            header('location:'.SITEURL.'backend/');
        } else{
            //User not available and login failed
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //Redirect to Login Page
            header('location:'.SITEURL.'backend/login.php');
        }
    }
?>