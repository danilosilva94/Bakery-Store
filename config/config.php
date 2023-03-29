<?php
    //Turn on output buffering
    ob_start();

    //Start session
    session_start();

    //Enable error reporting
    ini_set('display_errors', true);

    //Define constants
    define('SITEURL', 'http://localhost/Bakery-Store/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'bakery-store');

    //Set timezone
    date_default_timezone_set('Europe/Dublin');

    //Connect to database
    try{
        $con = new PDO('mysql:host='.LOCALHOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
        //Set PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
