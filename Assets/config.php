<?php
    $host = "localhost";
    $dbname = "chat";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$dbname;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    
    catch(PDOException $e){
        echo "
                <p>
                    <hr>
                    <span style=\"font-size: 1.4rem;\"> Echec de connexion à la base de données <span style=\"color: red;\">".$dbname."</span>.</span> 
                    <br> 
                    <span style=\"color: red; font-size: 1.3rem;\">".$e->getMessage()."</span>
                    <hr>
                </p>
            ";
        }
?>