<?php 
    require_once "config.php";
    require_once "Includes/functions.php";
    
    $submitBtn = $_POST["submitBtn"];
    $fname = verification($_POST["fname"]);
    $lname = verification($_POST["lname"]);
    $email = verification($_POST["email"]);
    $password = verification($_POST["password"]);
    
    if(isset($submitBtn)){
        if(isset($fname, $lname, $email, $password) && !empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
            echo "Welcome to your ".$fname. " ". $lname."!";
        }else{
            echo "All the input fields are required";
            displayErrorMessage("All the input fields are required");
        }
    }
    echo "Hello my dear!\n";
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>